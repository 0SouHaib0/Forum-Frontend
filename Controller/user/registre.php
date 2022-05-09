<?php
session_start();
if(isset($_SESSION["user"])){
    header("location:list.php");
}
$msg="";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
        if(isset($_POST["submit"])){
            $ur = new User();
            $data = "{";
            $data.= '"nom":"'.$_POST['nom'].'",';
            $data.= '"prenom":"'.$_POST['prenom'].'",'; 
            $data.= '"email":"'.$_POST['email'].'",'; 
            $data.= '"password":"'.$_POST['password'].'"';     
            $data.="}";
            if($ur->addUser($data)){
                header("location:http://localhost/forum/Controller/user/auth.php");
            }else{
                $msg = "email already exists";
                include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/registre.php";
            }
    }
    else{
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/registre.php";
    }
       