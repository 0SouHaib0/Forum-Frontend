<?php
 session_start();
    if(isset($_SESSION["user"])){
        if($_SESSION["user"]["admin"]){
            header("location:adminDashboard.php");
        }
        header("location:accueil.php");
    }
    
    
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/partials/navbar/pagegarde.php";
       