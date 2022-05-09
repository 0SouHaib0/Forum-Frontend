<?php

class ApitopicQuestions
{

    private $_url;

    public function __construct()
    {
        $this->_url = "http://localhost:8080/" ;
    }
    // Method GET
    public function get($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
       
        curl_setopt($curl, CURLOPT_URL, $this->_url ."topics/question/". $id);
        

        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);

        curl_close($curl);

    }

   



}

   
    

// $api = new ApiQuestions("questions");
// //$t="how to install ..";
// var_dump($api->cherche("how to install .."));
// //var_dump($api->get("626332826dfaac339c1b7898"));
