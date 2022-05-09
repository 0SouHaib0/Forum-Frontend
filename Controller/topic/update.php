<?php
//session_start();

    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";

    $topic = new topic();
        if(isset($_POST["submit"])){
            $data = "{"; 
                $data.= '"topic":"'.$_POST['topic'].'",'; 
                $data.= '"sub-topic":"'.$_POST['sub_topic_id'].'"';    
            $data.="}";
           $topics =  $topic->updateTopic($_GET["id"],$data); 
           header("location:../listTopic.php");
    }else{
        $topics = $topic->getTopic($_GET["id"]);
        $suptpc=$topic->getTopic($topics["sub_topic_id"][0]);
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/topic/update.php";

    }
       