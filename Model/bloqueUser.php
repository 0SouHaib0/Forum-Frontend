<?php
require_once "bloque.php";
class bloqueUser
{
    private $api;
    public function __construct()
    {
        $this->api = new APIBLOQUER("users");
    }
    public function bloqueUser($id)
    {   
        return $this->api->put($id);
    }
    public function getbloqueUser()
    {   
        return $this->api->get();
    }
      }