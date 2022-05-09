<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}else{
    if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/bloqueUser.php";
            $ur = new bloqueUser();
            $users = $ur->getbloqueUser();
            //var_dump($users);           
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/listbloquer.php";
    }else{
        header("location:http://localhost/forum/Controller/user/accueil.php");
    }
}

    

