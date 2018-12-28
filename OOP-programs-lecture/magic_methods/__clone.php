<?php
	class Animals
	{
		public $name;
		public $category;

		// on clone, make a deep copy of this object by cloning internal member;
	    public function __clone()
	    {
	    	//$this referce objAnimals instance
	    	//d($this);

        	$this->name = "cat";
        	$this->category = "Pet Animal";

        	return $this;
	    }
	}
	//Creating instance of Animals class
	$objAnimals = new Animals();
	
	//Assigning values
	$objAnimals->name = "Lion";
	$objAnimals->category = "Wild Animal";

	
	//Cloning the original object
	//we are copying objects by using PHP clone keyword
	$objCloned  = clone $objAnimals;

	
	d($objAnimals);
	d($objCloned);
	
	
?>