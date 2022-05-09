<?php

session_start();
if(!isset($_SESSION["user"])){
    header("locationhttp://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/questionUser.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
    $question = new Questions();
    $usr=new User();
    
    $questions = $question->getQuestionsUser($_GET["id"]);
    $user=$usr->getUser($_GET["id"]);
    
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/listquestion.php";
}
