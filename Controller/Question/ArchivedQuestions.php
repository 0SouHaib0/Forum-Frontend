<?php
session_start();


if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}



if($_SESSION["user"]["admin"]){
   

     require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";

     //"../../Model/Questions.php";

            $question = new Questions();
            $questions = $question->getArchivedQuestions();
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/archivedQuestions.php";
}
        else{
            header("location:addQuestion.php");
        }