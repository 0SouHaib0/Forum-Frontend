<?php
session_start();

if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){   
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/questionsupprime.php";
        $topic = new questionsupprime();
        $topic->deletequestion($_GET["id"]);
        header("location:http://localhost/forum/Controller/Question/listQuestions.php"); 

            
}else{
header("location:listQuestions.php");
}
  }
