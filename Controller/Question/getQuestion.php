<?php
session_start();


 require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Questions.php";
 
 require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/Answers.php";

 require_once $_SERVER['DOCUMENT_ROOT']."/forum/Model/user.php";

 
 $question = new Questions();

 if (isset($_POST["answer"])) {
    // tester les valeurs
    if($_SESSION["user"]!=null){
      $answer=new Answers();
      $id=$_SESSION["user"]["id"];
      $answer->addAnswer($_GET["id"], $_POST["answer"],$id);
    }
   else{
      header("location:../user/auth.php");
   }
    
   }
  
   if (isset($_POST["title"])) {
     $q=$question->chercher($_POST["title"]);
     if($q==null){
      include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/Notfound.php";
     }
     else{
     $id=$q["id"];
   
   


$qst = $question->getQuestion($id);

$user = new User();
$usr = $user->getUser($qst["userId"]);


$answer=new Answers();
$answers=$answer->getAnswer($id);




include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/questionAnswers.php";
   }
}
else {
   $id=$_GET["id"];
   $qst = $question->getQuestion($id);


$qst = $question->getQuestion($id);
$user = new User();
$usr = $user->getUser($qst["userId"]);

$answer=new Answers();
$answers=$answer->getAnswer($id);


include $_SERVER['DOCUMENT_ROOT']."/forum/View/Question/questionAnswers.php";
}
 
?>