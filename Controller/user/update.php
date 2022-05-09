<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}else{
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";
    $msg="";
    $ur = new User();
        if(isset($_POST["submit"])){
            $data = "{";
                $data.= '"nom":"'.$_POST['nom'].'",';
                $data.= '"prenom":"'.$_POST['prenom'].'",'; 
                $data.= '"email":"'.$_POST['email'].'"';     
            $data.="}";            
            $ss=$ur->updateUser($_SESSION["user"]["id"],$data);
           if( $ss== null){
               $msg = "email already exists";
            $user = $ur->getUser($_SESSION["user"]["id"]);
            include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/update.php";
           }else{
               $_SESSION["user"]=$ss;
                header("location:list.php");
           }
          
    }else{
        $user = $ur->getUser($_SESSION["user"]["id"]);
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/update.php";
    }
      
}
    