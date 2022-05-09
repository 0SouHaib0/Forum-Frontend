<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){

    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topicquestion.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
   
    $ur = new topic();
    $topics = $ur->getTopic($_GET ["id"]);
     
            $question = new topicQuestions();
            $questions = $question->gettopicquestion($_GET["id"]);
            // var_dump($questions);

        include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/questionstopic.php";

}
    
       

