<?php

class ApiAnswers
{
    private $_url;

    public function  __construct($url)
    {
        $this->_url ="http://localhost:8080/".$url;
    }

    public function get($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_URL, $this->_url ."/". $id);
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
        curl_close($curl);
    }

    public function get1($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_URL, $this->_url ."/get/". $id);
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
        curl_close($curl);
    }

    public function post($data){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url."/addAnswer");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

        $result = curl_exec($curl);

        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
    }

    // Method PUT
    public function put($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,$this->_url."/".$id."/archive " );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
    }
}