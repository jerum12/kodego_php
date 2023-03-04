<?php

class Goodbye {
    const LEAVING_MESSAGE = 'Hello love goodbye';

    public function getMessage(){
        echo self::LEAVING_MESSAGE;
    }

}
define('PI',3.1416);
const NEW_MESSAGE = 'Hello new message';

echo Goodbye::LEAVING_MESSAGE;
echo "<br/>";
echo PI;
echo "<br/>";
echo NEW_MESSAGE;

?>