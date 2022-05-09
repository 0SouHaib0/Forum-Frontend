<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:http://localhost/forum/Controller/user/auth.php");
}
require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
//require_once "../../Model/Questions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";


$msg = "";
if($_SESSION["user"]!= null){
    $topic = new topic();
    $topics = $topic->getAllTopics();
    if (isset($_POST["title"]) && isset($_POST["question"]) && isset($_POST["topic"])) {
        // tester les valeurs
    $id=$_SESSION["user"]["id"];
    $question = new Questions();
    $flag = $question->addQuestion($_POST["title"], $_POST["question"], $_POST["topic"],$id);
        header("location:listQuestions.php");
}
include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/form.php";
}
else {
    header("location:../user/auth.php");

}
// "../../Views/Question/form.php";
