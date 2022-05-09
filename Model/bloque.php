
<?php
class APIBLOQUER
{

    private $_url;
    
    public function __construct($url)
    {
        $this->_url = "http://localhost:8080/".$url ;
    }

    public function get(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        
        
        curl_setopt($curl, CURLOPT_URL, $this->_url."/bloquer");
        
        
        
        $result = curl_exec($curl);
        curl_close($curl); 
        if (curl_error($curl))
            return null;
        else 
            return json_decode($result, true);
    }


public function put($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_url."/"."bloquer"."/".$id);
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