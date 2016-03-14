<?php


class Person
{
  public $name = "Default Name";
  public $age = 0;

  public function Describe() 
  {
    return $this->name . " is " . $this->age . " years old \n";
  }
}

$alex = new Person;
$alex->name = "Alex Ispa-Cowan";
$alex->age = 27;
echo $alex->Describe();

?>