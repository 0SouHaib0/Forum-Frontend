<?php
session_start();
    if(!isset($_SESSION["user"])){
        header("location:http://localhost/forum/Controller/user/auth.php");
    }
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
    $ur = new User();
    $msg = null;
        if(isset($_POST["submit"])){
            if($_POST["oldpassword"]!=$_SESSION["user"]["password"]){
                $msg = "old password is incorrect";
                include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/updatepassword.php";
            }else{
                if($_POST["password"]==$_POST["repassword"]){
                    $data = "{";
                        $data.= '"password":"'.$_POST['password'].'"';   
                    $data.="}";
                   $_SESSION["user"] =  $ur->updatePasswordUser($_SESSION["user"]["id"],$data);                
                   header("location:http://localhost/forum/Controller/user/list.php");
                }else{
                    $msg = "password not matched";
                    include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/updatepassword.php";
                }
            }           
    }else{
        $user = $ur->getUser($_SESSION["user"]["id"]);
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/updatepassword.php";
    }
       