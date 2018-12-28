<?php  

class SystemInfo{

	//can't access directly
	private function get_date(){
			return date("d/m/Y");
	}

	//can't access directly
	private function get_version(){
			return phpversion();
	}

	//accessible
	public function get_details(){

		$date=$this->get_date();
		$version=$this->get_version();

		echo "The Date is : $date"."<br/>";
		echo "The PHP Version is : $version"."</br/>";

	}
}

//create an instance of SystemInfo class
$sys=new SystemInfo();

//call public method
$sys->get_details();

//$sys->get_date(); //Fatal error:
?>



