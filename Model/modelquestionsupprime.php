<?php

class modelquestionsupprime
{
private $_url;
    
    public function __construct()
    {
        $this->_url = "http://localhost:8080/questions/delete" ;
    }
   
    /// DELETE
    public function delete($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url ."/". $id );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
                
    }
    
}

// $api = new API("questions");
// var_dump($api->cherche("how to install .."));


//$api = new API("users");
// $data = '{ "password":"753159852456"}';
// var_dump($api->put("624e23d921c8a0373761a958",$data));
