<?php
session_start();
if($_SESSION==null){
require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";


// include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
$topic = new topic();
$topics = $topic->getAllTopics();
if(isset($_GET['id'])){
   
    if($_GET['id']=="All"){
        $question = new Questions();
$questions = $question->getAllQuestions();
  $t="All";
    }
    else{
        $id=$_GET['id'];
        $r=$topic->getTopic($id);
        $t=$r["topic"];
        $question = new Questions();
    $questions = $question->QuestionsTopic($id);
    }
   
   
// var_dump($questions);
include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
}
else{
    // $id=null;
    $t="--Please choose an topic--";
    $question = new Questions();
$questions = $question->getAllQuestions();
   // $questions = null;
 //  var_dump($questions);
include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
}
// var_dump($id);
//  echo $id;
}   
// var_dump($questions);
else{
if(!$_SESSION["user"]["admin"] || !isset($_SESSION["user"]) ){
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/topic.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
    
    
    // include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
         
    $topic = new topic();
    $topics = $topic->getAllTopics();
    if(isset($_GET['id'])){
       
        if($_GET['id']=="All"){
            $question = new Questions();
    $questions = $question->getAllQuestions();
      $t="All";
        }
        else{
            $id=$_GET['id'];
            $r=$topic->getTopic($id);
            $t=$r["topic"];
            $question = new Questions();
        $questions = $question->QuestionsTopic($id);
        }
       
       
   // var_dump($questions);
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
    }
    else{
        // $id=null;
        $t="--Please choose an topic--";
        $question = new Questions();
    $questions = $question->getAllQuestions();
       // $questions = null;
     //  var_dump($questions);
    include $_SERVER['DOCUMENT_ROOT']."/forum/View/user/accueil_user.php";
    }
  // var_dump($id);
 //  echo $id;
}   
else{
    header("location:adminDashboard.php");
}   
}
