<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/RepQuestion.php";
            $rq = new RepQuestion();
            $repQ = $rq->ignore($_GET["id"]);
          
               header("location:list.php");
            
}
