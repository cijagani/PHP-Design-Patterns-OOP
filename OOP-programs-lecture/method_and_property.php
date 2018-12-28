<?php
class Rectangle
{
    // Declare  properties
    public $length = 0;
    public $width = 0;
    
    // Method to get the perimeter
    public function getPerimeter(){
    	//P=2(l+w)
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
    	//A=wl
        return ($this->length * $this->width);
    }
}
	$rect=new Rectangle();
	$rect->length=10;
	$rect->width=20;

	echo $rect->getPerimeter();
	echo $rect->getArea();
?>