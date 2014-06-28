<?php 


/**
 *
 * Library HASHING PASSWORD 
 * @author Ardha
 */
 namespace Libraries;
 use Resources;
 
 class Hash{
    
    function __construct(){
        $secreteToken = 'JYGGdyw732626487HGhjdasgyugy786832984askdjasldjasld7623';
        $this->crypt = new Resources\Encryption($secreteToken);
    }
    
    function Password($input){
        $hash=$this->crypt->encrypt($input);
        $result=$hash.md5($hash).base64_encode($hash);
        return $result;
    }
 }