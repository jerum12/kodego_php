<?php

class Accommodations {

    public $name;
    public $details;
    public $price;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setDetails($details){
        $this->details = $details;
    }

    public function getDetails(){
        return $this->details;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }
}


$bohol = new Accommodations();

$bohol->setName('ito ay input name galing sa form');
$bohol->setDetails('ito ay input details galing sa form');
$bohol->setPrice('5,000'.' per night');


function callDatabase($bohol){

    $name_insert_to_db = 'ito ay input name galing sa form';
    $details_insert_to_db = $bohol->getDetails();
    $price_insert_to_db = $bohol->getPrice();


    // insert into tbl_accommodation values ($name_insert_to_db, $details_insert_to_db, $price_insert_to_db )
}


?>