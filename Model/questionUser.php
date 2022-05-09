<?php

require_once "question.php";
class Questions
{
    private $api;

    public function __construct()
    {
        $this->api = new  ApiQuestionsUser("users");
    }

    public function getQuestionsUser($id)
    {
        return $this->api->get($id);
    }
  }