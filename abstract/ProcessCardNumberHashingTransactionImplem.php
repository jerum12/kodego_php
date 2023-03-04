<?php

include 'InterfaceSample.php';

class ProcessCardNumberHashingTransactionImplem implements ProcessKeyHashingInterface{

    /**
     * @return mixed
     */
    public function getData() {
        //return keys na galing sa database;
    }
    
    /**
     * @return mixed
     */
    public function processEncryptionKeys($message) {
    
        $message = 'Ready your ammunition; we attack at dawn.';
            $secret_key = "my-secret-key";
            $method = "aes128";
            $iv_length = openssl_cipher_iv_length($method);
            $iv = openssl_random_pseudo_bytes($iv_length);
            
            $encrypted_message = openssl_encrypt($message, $method, $secret_key, 0, $iv);
    
            return $encrypted_message;
            
        //$key = $this->getKeys();
        // loop
        
        // key i process for encryption;
        //return keys na process ng encryption;
    }
    
    /**
     * @return mixed
     */
    public function processDecryptionKeys() {
    }
    
    /**
     * @return mixed
     */
    public function maskKeys() {
    }
    
    /**
     * @return mixed
     */
    public function inserKeys($encrypted_key) {
        //dito mag save ng key sa database;
    }
    }
    

?>