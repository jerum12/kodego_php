<?php

class User {

    public static $staticProps;
    
    public static function showMessage($message){
        echo $message;
    }
}

User::showMessage('Hello World')


?>