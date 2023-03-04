<?php

interface ProcessKeyHashingInterface{
    public function getData();
    public function processEncryptionKeys($message);
    public function processDecryptionKeys();
    public function maskKeys();
    public function inserKeys($encrypted_key);
}


?>