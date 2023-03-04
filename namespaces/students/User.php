<?php

namespace namespaces\Students;
class User {

    private $pangalan;
    private $color;


    public function showDetails(){
        echo "Hello, My name is " . $this->pangalan . " My color is " . $this->color;
    }
 
    public function __construct($name, $color) {
        $this->pangalan = $name;
        $this->color = $color;
        echo '<div style="color:green">Initialization</div>';
    }

    public function __destruct(){
        echo "The Animals object has been destroyed";
    }

    public function setName($name){
        $this->pangalan = $name;
    }

    public function getName(){
        return $this->pangalan;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}



