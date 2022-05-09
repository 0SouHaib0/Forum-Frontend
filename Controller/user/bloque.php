<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/bloqueUser.php";
    $ur = new bloqueUser();
    $ur->bloqueUser($_GET["id"]);
    header("location:http://localhost/forum/Controller/user/list.php");   
}else{
    header("location:http://localhost/forum/Controller/user/accueil.php");
}
        
       