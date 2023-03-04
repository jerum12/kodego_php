<?php

include 'ProcessKeyHashingTransactionImplem.php';


$key = new ProcessKeyHashingTransactionImplem();
$enc_key = $key->processEncryptionKeys('password');
$key->inserKeys($enc_key);
?>