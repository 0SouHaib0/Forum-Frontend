<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
        $topic = new topic();
        $topic->deleteTopic($_GET["id"]);
        header("location:../listTopic.php");
    }else{
        header("location:../Question/listQuestion.php");
    }
}


   
        
        
       