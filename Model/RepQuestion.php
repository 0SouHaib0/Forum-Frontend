<?php
require_once "api.php";
require_once "user.php";
require_once "Questions.php";
class RepQuestion{
    private $api;
    private $usr;
    private $qct;
    public function __construct()
    {
        $this->api = new API("repQuestions");
        $this->usr=new User();
        $this->qct=new Questions();
    }

    public function getAllrepQuestions()
    {
      //  return $this->api->get();
      $rep=$this->api->get();
     
      if($rep == null){
          return null;
      }
      else{
      
      $res=array();
      foreach($rep as $t){
          
          $user=$this->usr->getUser($t["userId"]);
        //   var_dump($user);
           $nom=$user["prenom"]." ".$user["nom"];
           $qu=$this->qct->getQuestion($t["questionId"]);
          // var_dump($qu);
           $tab = array(
            'id'=>$t["id"],
            'nom'=>$nom,
            'title'=>$qu["title"],
            'question'=>$qu["question"],
            'cause'=>$t["cause"],
            'questionId'=>$qu["id"]
         );
         //var_dump($tab);
         
         $res[]=$tab;
         $tab=null;

      }

      return $res;
    }
    }  

    public function add($userId, $questionId, $cause){
        $q = array(
            "userId" => $userId,
            "questionId" => $questionId,
            "cause" => $cause
        );

        return $this->api->post(null, json_encode($q));
    }

    public function delete($id)
    {   
        return $this->api->delete($id );
    }
    public function ignore($id)
    {   
        return $this->api->ignore($id );
    }
    
}

$test=new RepQuestion();
$test->getAllrepQuestions();
 //var_dump($test->getAllrepQuestions());