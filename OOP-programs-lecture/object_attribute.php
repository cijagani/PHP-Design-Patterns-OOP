<?php  
class person{
	//access specifier $fieldname;
	  var $name="";
}

//create instance
$p1=new person();

// we use -> operator to access attributes of object
$p1->name="chirag";


//create another instance
$p2=new person();
$p2->name="abc";

//now print field value of p1 object
echo $p1->name .PHP_EOL;

// print value of p2 object
echo $p2->name. "\n";
?>


