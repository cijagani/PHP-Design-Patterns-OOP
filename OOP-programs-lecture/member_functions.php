<?php 
// methods are functions and defined in body of the class

class Circle{
	
	//access specifier field/variable name 
	//public $radius=0;

	//function functionname(parameter)
	function setRadius($param1){

		//$this refers to the current instance. to refrence a member variable or
		//member function WITHIN the class definition.
		$this->radiuss=$param1;
	}

	function area()
	{
		return $this->radiuss * $this->radiuss * M_PI;
	}
}

//create an object of circle class
$C=new Circle();

//set radius by using setRadius() method
$C->setRadius(5);

//print area of circle
echo $C->area();
?>



