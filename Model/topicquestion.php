<?php
require_once "apitopicquestion.php";
class topicQuestions
{
    private $api;
    public function __construct()
    {
        $this->api = new ApitopicQuestions();
    }
    
    public function gettopicquestion($id)
    {   
        return $this->api->get($id);
    }
      }