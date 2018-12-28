<?php  
class Person{
 private $properties=array();
 

 public function __set($propertyName, $propertyValue){
 $this->properties[$propertyName] = $propertyValue;
	d($this);
 } 
 
}
 
$p = new Person();
$p->firstName = 'chirag';
$p->lastName = 'patel';
?>