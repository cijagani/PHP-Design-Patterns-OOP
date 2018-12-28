<?php  
class grandParent
{
	public function __construct()
	{
		echo "GrandParent<br/>";
	}
}
class parents extends grandParent
{
	public function __construct()
	{
		parent::__construct();
		echo "Parents<br/>";
	}
}
class child extends parents
{
	public function __construct()
	{
		parent::__construct();
		echo "Child";
	}
}

$child=new child();
d($child);
?>