<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/questionUser.php";
    //require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
    
     
            $question = new Questions();
            $questions = $question->getQuestionsUser($_SESSION["user"]["id"]);
            // var_dump($questions);

        include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/myquestion.php";
       

