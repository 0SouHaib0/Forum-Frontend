<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
            $topic = new topic();
            $topics = $topic->getAllTopics();
            
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/topic/list.php";
    }else{
        header("location:../user/accueil.php");
    }

}      