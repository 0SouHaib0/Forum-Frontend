<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:auth.php");
}
if($_SESSION["user"]["admin"]){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/RepQuestion.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/RepAnswer.php";

            $rq = new RepQuestion();
            $repQ = $rq->getAllrepQuestions();
            $ra = new RepAnswer();
            $repA = $ra->getReportedAnswers();
           
            
        include $_SERVER['DOCUMENT_ROOT']."/forum/View/reportedQuestionAndAnswer/reportedQuestionAndAnswer.php";
        
}
else{
    header("location:../user/accueil.php");
}