<?php

class API
{
    private $_url;
    
    public function __construct($url)
    {
        $this->_url = "http://localhost:8080/".$url ;
    }
    //// GET
    public function get($id = null){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        
        if ($id == null){
            curl_setopt($curl, CURLOPT_URL, $this->_url);
        }else{
            curl_setopt($curl, CURLOPT_URL, $this->_url ."/". $id);   
        }
        
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else 
            return json_decode($result, true);
        curl_close($curl); 
    }
    ///AUTH
    public function auth($email,$password){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_URL, $this->_url."/login"."/".$email."/".$password);
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else 
            return json_decode($result, true);
    }
    /// POST
    public function post($id=null,$data){
        $curl = curl_init();
        if($id==null){
            curl_setopt($curl, CURLOPT_URL, $this->_url."/add");   
        }else{
            curl_setopt($curl, CURLOPT_URL, $this->_url."/add"."/".$id);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
        
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
    }
    /// PUT
    public function put($passwd,$id, $data){
        $curl = curl_init();
        if($passwd==false){
            curl_setopt($curl, CURLOPT_URL, $this->_url."/update"."/".$id);
        }else{
            curl_setopt($curl, CURLOPT_URL, $this->_url."/update"."/password"."/".$id);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
        
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
    }
    /// DELETE
    public function delete($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url ."/delete"."/". $id );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
                
    }
    /// ingorer
    public function ignore($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url ."/ignore"."/". $id );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        
        $result = curl_exec($curl);
        curl_close($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
                
    }

    public function QuestionsTopic($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url ."/question"."/". $id );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
        curl_close($curl); 
    }
 
    public function getNumber(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_URL, $this->_url ."/count");   
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else 
            return json_decode($result, true);
        curl_close($curl); 
    }
}

// $api = new API("questions");
// var_dump($api->cherche("how to install .."));


//$api = new API("users");
// $data = '{ "password":"753159852456"}';
// var_dump($api->put("624e23d921c8a0373761a958",$data));
