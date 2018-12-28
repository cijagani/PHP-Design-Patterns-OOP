<?php 
//The __get() method is called whenever you attempt to read a non-existing or private, protected property of an object.
//syntax :public mixed __get ( string $name );
class Person{
 public $firstName="abc";
 protected $lastName;
 private $surName;
 
 public function __get($propertyName){
 	echo "attempted to read non-existing / not valid property: $propertyName<br/>";
 }
 
}
 
$p = new Person();
echo $p->firstName."<br/>";
echo $p->lastName;//can't access protected property
echo $p->surName; //can't access private property
echo $p->address;//non-existing prop
echo $p->any_non_existing_or_private_prop; //non-existing prop
 ?>
 
 
 
 
 
 
 
 
 
 
 