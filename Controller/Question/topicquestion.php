<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topicquestion.php";
     
            $topicquestion = new topicQuestions();
            $topicquestions = $topicquestion->getAllQuestions();

        include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/Listtopicquestion.php";
           }
else{
            header("location:listQuestions.php");
        }
       

