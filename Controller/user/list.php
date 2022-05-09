<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
        $ur = new User();
        $users = $ur->getAllUsers();   
        
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/list.php";
    }else{
       
        header("location:http://localhost/forum/Controller/user/accueil.php");
    }
    
}

    