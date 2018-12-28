<?php 
//The __set() method is called whenever you attempt to write to a non-existing or private and protected property of an object..
//syntax : public void __set ( string $name , mixed $value );
class Person{
 private $firstName;
 public $address;
  
 public function __set($propertyName, $propertyValue){
 	echo "attempted to write to non-existing property: $propertyName <br/>";
 } 
 
}
 
$p = new Person();
$p->address="SV road";
$p->firstName = 'chirag'; //can't access private property
$p->lastName = 'patel'; //non-existing prop

echo $p->address;
 ?>
 
 
 
 
 