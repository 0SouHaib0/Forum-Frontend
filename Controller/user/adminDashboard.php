<?php
 session_start();
 if(!isset($_SESSION["user"])){
     header("location:http://localhost/forum/Controller/user/auth.php");
 }else{
    if($_SESSION["user"]["admin"]){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
                $ur = new User();
                $Tr = new topic();
                $Qr= new Questions();
    
               $s= $ur->getNumberUsers();
               $t=$Tr->getNumberTopics();
               $q=$Qr->getNumberQuestions();
    
            include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/Dashboard.php";
    }else{
      header("location:http://localhost/forum/Controller/user/accueil.php");
    }
 }
    
    ?>