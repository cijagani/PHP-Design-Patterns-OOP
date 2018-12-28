<?php
class person{
	//access specifier $fieldname;
	public $name="";
	private $age;
}
//create instance
$p1=new person();

// we use -> operator to access attributes of object
$p1->name="abc";
$p1->age=18;

//create another instance
$p2=new person();
$p2->name="xyz";
$p2->age=20;

//now print field value of p1 object
echo $p1->name. "\n";
echo $p1->age. "\n";

// print value of p2 object
//echo $p2->name. "\n";
//echo $p2->age. "\n";
?>