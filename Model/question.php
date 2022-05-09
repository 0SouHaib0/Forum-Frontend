<?php

class ApiQuestionsUser
{

    private $_url;

    public function __construct($url)
    {
        $this->_url = "http://localhost:8080/".$url ;
    }
    // Method GET
    public function get($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        
      curl_setopt($curl, CURLOPT_URL, $this->_url ."/questions/". $id);
        

        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);

        curl_close($curl);

    }
     }