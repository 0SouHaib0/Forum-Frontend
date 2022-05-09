<?php
require_once "modelquestionsupprime.php";
class questionsupprime
{
    private $api;
    public function __construct()
    {
        $this->api = new modelquestionsupprime();
    }

    
    public function deletequestion($id)
    {   
        return $this->api->delete($id);
    }
}