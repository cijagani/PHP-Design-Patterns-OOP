<?php
//The __get() method is called whenever you attempt to read a non-existing or private property of an object.

//The __set() method is called whenever you attempt to write to a non-existing or private property of an object..

class Person{
 private $firstName;
 
 public function __get($propertyName){
 	echo "attempted to read non-existing property: $propertyName<br/><br/>";
 }
  
 public function __set($propertyNane, $propertyValue){
 	echo "attempted to write to non-existing property: $propertyNane<br/>";
 } 
 
}
 
$p = new Person();
 
$p->firstName = 'chirag';
echo $p->firstName;
 
$p->lastName = 'patel';
echo $p->lastName;

d($p);
 ?>