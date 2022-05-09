<?php
 session_start();
 if(!isset($_SESSION["user"])){
     header("location:http://localhost/forum/Controller/user/auth.php");
 }

 session_destroy();
 header("location:http://localhost/forum/Controller/user/auth.php");
       