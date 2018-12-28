<?php  
class MyClass{
	//ACM function __construct()
	public function __construct(){
		echo "MyClass class has initialized<br/>";
	}

	public function __destruct(){
		echo "</br>destructor called";
	}
}

$obj=new MyClass();
//unset($obj);
print_r($obj);
?>