<?php

require_once "ApiQuestions.php";
require_once "api.php";
class Questions
{
    private $api;
    private $apiQ;


    public function __construct()
    {
        $this->api = new  ApiQuestions("questions");
        $this->apiQ = new API("topics");
    }

    public function getAllQuestions()
    {
        return $this->api->get();
    }

    public function getArchivedQuestions()
    {
        return $this->api->getArchived();
    }

    public function getQuestion($id)
    {
        return $this->api->get($id);
    }

    public function addQuestion($title, $question, $topic, $id)
    {
        $q = array(
            "title" => $title,
            "question" => $question,
            "topicId" => $topic,
            "userId"=>$id
        );

        return $this->api->post(json_encode($q));
    }

    public function updateResolved($id)
    {
        return $this->api->SetAsResolved($id);
    }

    public function updateArchive($id)
    {
        return $this->api->archive($id);
    }
    public function chercher($title)
    {
        $q = array(
            "title" => $title
        );
        return $this->api->cherche(json_encode($q));
    }
    public function QuestionsTopic($id){
        return $this->apiQ->QuestionsTopic($id);
    }


    public function getNumberQuestions()
    {   
        return $this->api->getNumberQ();
    }
    public function deletequestion($id)
    {   
        return $this->api->delete($id);
    }
}

