<?php

class ApiQuestions
{

    private $_url;

    public function __construct($url)
    {
        $this->_url = "http://localhost:8080/".$url ;
    }
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
    // Method GET
    public function get($id = null){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        if ($id == null){
            curl_setopt($curl, CURLOPT_URL, $this->_url );
        }else{
            curl_setopt($curl, CURLOPT_URL, $this->_url ."/question/". $id);
        }

        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);

        curl_close($curl);

    }


    public function getArchived($id = null){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        if ($id == null){
            curl_setopt($curl, CURLOPT_URL, $this->_url."Archived" );}

        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);

        curl_close($curl);

    }


    public function cherche($title){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url ."/chercher/");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $title);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
    
        $result = curl_exec($curl);
    
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
    
    }

    // Method POST
    public function post($data){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url."/add/");
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
    public function archive($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,$this->_url."/".$id."/archive " );  //| $this->_url.$id."/setAsResolved
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

    public function SetAsResolved($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url."/".$id."/setAsResolved");

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        $result = curl_exec($curl);
        if (curl_error($curl))
            return null;
        else
            return json_decode($result, true);
        curl_close($curl);
    }
    public function getNumberQ(){
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
// $api = new ApiQuestions("questions");
// //$t="how to install ..";
// var_dump($api->cherche("how to install .."));
// //var_dump($api->get("626332826dfaac339c1b7898"));
