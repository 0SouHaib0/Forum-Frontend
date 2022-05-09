<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/debloqueUser.php";
    $ur = new debloqueUser();
    $ur->debloqueUser($_GET["id"]);
    header("location:../listbloquer.php");   
}else{
    header("location:http://localhost/forum/Controller/user/acceuil.php");
}
        
       

    