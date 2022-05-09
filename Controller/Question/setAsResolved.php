<?php

session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
$question = new Questions();


$msg = "";
$idq = $_GET["id"];
$title=" ";
try {
    $q = $question->getQuestion($idq);
    $title=$q["title"];
    if (isset($_POST['oui'])) {
        $question->updateResolved($_GET['id']);
        header("location:ListQuestions.php");
    } else if (isset($_POST['non']))
        header("location:ListQuestions.php");
} catch (Exception $e) {
    $msg = $e->getMessage();
}

include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/setAsResolved.php";
//"/miniForum/Views/Question/setAsResolved.php";
?>