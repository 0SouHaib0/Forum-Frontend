<?php
session_start();
if(!isset($_SESSION["user"])){
    header("locationhttp://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){

     require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
     
            $question = new Questions();
            $questions = $question->getAllQuestions();
            
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/List.php";
    }else{
        header("location:../user/accueil.php");
    }   
