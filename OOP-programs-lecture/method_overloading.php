<?php  
class Sum{
	public function getSum(){
		
	}

	public function getSum($param1){
		
	}

	public function getSum($param1, $param2){
		
	}
	
}
	$x=new Sum();
	echo $x->getSum(); //0
	echo $x->getSum(5);//5
	echo $x->getSum(5,6);//11
?>