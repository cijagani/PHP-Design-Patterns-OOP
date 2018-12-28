<?php
	//The __CLASS__ constant returns the name of the current class.
	class MyClass
	{
	    public function getClassName(){
	        return "class name is : ". __CLASS__."<br/>method name is : ".__FUNCTION__;
	    }
	}
	$obj = new MyClass();
	echo $obj->getClassName(); // Displays: MyClass
?>
