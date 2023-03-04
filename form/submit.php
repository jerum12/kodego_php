<?php

class ContactForm {

    private $name;
    private $address;


    public function __construct(){

    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return  $this->name;
    }

    public function setAddress($address){
        $this->address = $address;
    }
    public function getAddress(){
        return  $this->address;
    }

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $address = $_POST['address'];

    $userContactForm = new ContactForm();
    $userContactForm->setName($name);
    $userContactForm->setAddress($address);


    echo $userContactForm->getName();
    echo "<br/>";
    echo $userContactForm->getAddress();
}

?>