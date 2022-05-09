<?php
require_once "debloque.php";
class debloqueUser
{
    private $api;
    public function __construct()
    {
        $this->api = new APIDEBLOQUER("users");
    }
    public function debloqueUser($id)
    {   
        return $this->api->put($id);
    }
      }