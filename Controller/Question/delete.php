<?php

session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";


$question = new Questions();


$msg = "";
$idq = $_GET["id"];
$title=" ";
try {
    $q = $question->getQuestion($idq);
    $title=$q["title"];
    if (isset($_POST['oui'])) {
        $question->deleteQuestion($_GET['id']);
            header("location:ArchivedQuestions.php");
    } else if (isset($_POST['non']))
        header("location:ArchivedQuestions.php");
} catch (Exception $e) {
    $msg = $e->getMessage();
}

include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/delete.php";
}else{
    header("location:../user/accueil.php");
}


//"../../Views/Question/archive.php";
?>