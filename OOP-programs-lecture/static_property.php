<?php
class counter{ 

	//static variable
	private static $count = 0;

	//constructor
	function __construct() {
		//Use self to refer to the current class
		//use self::$member for static members
		self::$count++;
	} 

	
	public static function getCount() { 
	 return self::$count; 
	} 

}

	/*** create a new instance ***/
	$count = new counter(); 

	/*** get the count ***/
	echo counter::getCount() . '<br />';

	/*** create another instance ***/
	$next = new counter(); 

	/*** echo the new count ***/
	echo counter::getCount().'<br />'; 

	/*** and a third instance ***/
	$third = new counter;
	echo counter::getCount().'<br />';
?>