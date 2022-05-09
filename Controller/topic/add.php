<?php

session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
    $topic = new topic();
        if(isset($_POST["submit"])){
            $data = "{";
            $data.= '"topic":"'.$_POST['topic'].'"';     
            $data.="}";
            $topic->addTopic($_POST["sub"],$data);
            header("location:listTopic.php");
           
    }
    else{
        $topics=$topic->getAllTopics();
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/topic/add.php";
    }

    }else{
        header("location:../Question/listQuestion.php");
    }
    
}