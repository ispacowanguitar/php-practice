<?php


class Person
{
  public $name = "Default Name";
  public $age = 0;

  public function __construct($personProperties)
  {
    $this->name = $personProperties['name'];
    $this->age = $personProperties['age'];
  }

  public function Describe() 
  {
    return $this->name . " is " . $this->age . " years old \n";
  }

  public function Scream()
  {
    return $this->name . " Says AAAAAAARG";
  }
}

Class Child extends Person
{
  public $favoriteColor;

  public function __construct($personProperties)
  {
    $this->name = $personProperties['name'];
    $this->age = $personProperties['age'];
  }
}

// $personProperties = array('name' => 'Alex', 'age' => 27);
$alex = new Person(array('name' => 'Alex', 'age' => 27));
// $alex->name = "Alex Ispa-Cowan";
// $alex->age = 27;

$isaac = new Child(array('name' => 'Isaac', 'age' => 1));
$isaac->favoriteColor = "Blue";


echo $isaac->Describe();
echo $isaac->Scream() . "\n";

?>