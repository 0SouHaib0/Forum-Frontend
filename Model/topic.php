<?php
require_once "api.php";
class topic
{
    private $api;
    public function __construct()
    {
        $this->api = new API("topics");
    }

    public function getAllTopics()
    {
        return $this->api->get();
    }  
    public function getTopic($id)
    {
        return $this->api->get($id);
    }
    public function updateTopic($id,$data)
    {   
        return $this->api->put($id,$data);
    }
    public function addTopic($id,$data)
    {   
        return $this->api->post($id,$data);
    }
    public function deleteTopic($id)
    {   
        return $this->api->delete($id );
    }
    public function getNumberTopics()
    {   
        return $this->api->getNumber();
    }
}