<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    if (isset($_POST["cause"])){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/RepAnswer.php";

        $userId = $_SESSION["user"]["id"];
        $answerId = $_GET["answerId"];
        $ra = new RepAnswer();
        $flag = $ra->add($userId, $answerId, $_POST["cause"]);
        header("location:../Question/listQuestions.php");
    }
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/reportedQuestionAndAnswer/form.php";
}