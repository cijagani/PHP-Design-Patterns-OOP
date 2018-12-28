<?php
	class Animals
	{
		public $name;
		public $category;
	}
	//Creating instance of Animals class
	$objAnimals = new Animals();
	
	//Assigning values
	$objAnimals->name = "Lion";
	$objAnimals->category = "Wild Animal";

	//Copying object(shallow copy)
	$objCopied = $objAnimals;

	$objCopied->name = "Cat";
	$objCopied->category = "Pet Animal";
	
	d($objAnimals);
	
	d($objCopied);
	

	//Technically this is not a copy, but it is just assigning the object’s reference to another object.

	//So, this type of copy is just a duplicate reference to the original instance.
	
	
	
?>