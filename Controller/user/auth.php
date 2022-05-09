<?php
 session_start();
    if(isset($_SESSION["user"])){
        header("location:list.php");
    }
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
    $msg=null;
        if(isset($_POST["submit"])){
            $ur = new User();
           $s= $ur->Auth($_POST["email"],$_POST["password"]);
            if($s==null){
                $msg = "failed";
                include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/auth.php";
            }else{
                $_SESSION["user"]= $s;
                header("location:adminDashboard.php");
            }   
       }else{
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/auth.php";
    }
       