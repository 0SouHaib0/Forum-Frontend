<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:../user/auth.php");
}else{
    if (isset($_POST["cause"])){
        require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/RepQuestion.php";

        $userId = $_SESSION["user"]["id"];
        $questionId = $_GET["questionId"];
        $rq = new RepQuestion();
        $flag = $rq->add($userId, $questionId, $_POST["cause"]);
        header("location:../Question/listQuestions.php");
    }
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/reportedQuestionAndAnswer/form.php";
}