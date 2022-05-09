<?php
require_once "api.php";
class User
{
    private $api;
    public function __construct()
    {
        $this->api = new API("users");
    }

    public function getAllUsers()
    {
        return $this->api->get();
    } 
    public function getUser($id)
    {
        return $this->api->get($id);
    }
    public function Auth($email,$password)
    {
        return $this->api->auth($email,$password);
    }
    public function addUser($data)
    {   
        return $this->api->post(null,$data);
    }

    public function updateUser($id,$data)
    {   
        return $this->api->put(FALSE,$id,$data);
    }
    public function updatePasswordUser($id,$data)
    {   
        return $this->api->put(true,$id,$data);
    }
    
    public function getNumberUsers()
    {   
        return $this->api->getNumber();
    }

}
