<?php
require_once "ApiAnswers.php";
class Answers
{
    private $api;

    public function __construct()
    {
        $this->api = new ApiAnswers("answers");

    }

    public function getAnswer($id){

        return $this->api->get($id);
    }

    public function getAnswer1($id){

        return $this->api->get1($id);
    }


    public function addAnswer($idq,$answer,$idU){
        $a=array(
            "answer" =>$answer,
           "userId"=>$idU,
            "questionId" =>$idq
        );
        return $this->api->post(json_encode($a));
    }

    public function archive($id)
    {
        return $this->api->put($id);
    }

}