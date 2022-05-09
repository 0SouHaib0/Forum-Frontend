<?php

require_once "api.php";
require_once "user.php";
require_once "Answers.php";
require_once "Questions.php";


class RepAnswer{

    private $api;
    private $usr;
    private $ans;
    private $qst;

    public function __construct(){
        $this->api = new API("reported-answers");
        $this->usr = new User();
        $this->ans = new Answers();
        $this->qst = new Questions();
    }

    public function getReportedAnswers(){
        $repAns = $this->api->get();
        if($repAns == null){
            return null;
        }else{
            $res = array();
            foreach($repAns as $ra){
                $user = $this->usr->getUser($ra["userId"]);
                $fullName = $user["prenom"]." ".$user["nom"];
               // var_dump($ra);
                $answer = $this->ans->getAnswer1($ra["answerId"]);
                //var_dump($answer);
                $question = $this->qst->getQuestion($answer["questionId"]);
                $answeredQuestion = $question["question"];
                $tab = array(
                    'id' => $ra["id"],
                    'answer' => $answer["answer"],
                    'answeredQuestion' => $answeredQuestion,
                    'nom' => $fullName,
                    'cause' => $ra["cause"],
                    'questionId'=>$question['id']
                );         
                $res[]=$tab;
                $tab=null;
            }
            return $res;
        }
    }

    public function add($userId, $answerId, $cause){
        $a = array(
            "userId" => $userId,
            "answerId" => $answerId,
            "cause" => $cause
        );

        return $this->api->post(null, json_encode($a));
    }

    public function delete($id){   
        return $this->api->delete($id);
    }

    public function ignore($id){   
        return $this->api->ignore($id );
    }    
}