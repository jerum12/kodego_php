<?php


abstract class Animal{

    protected $species;

    public function __construct($species){
        $this->species = $species;
    }

    abstract public function makeSound();

    public function getSpecies(){
        return $this->species;
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo $this->getSpecies() . " Barks!";
    }
}

$dog = new Dog('Shih Tzu');
$dog->makeSound();

?>