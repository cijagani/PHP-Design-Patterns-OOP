<?php  
	class sum{
		public function getSum(){

			//Gets an array of the function's argument list.
			$args= func_get_args();

			//print_r($args);
			if (count($args) < 1) {
				return 0;
			}
			//if(count($args) < 1) return 0;
			$sum=0;
			foreach ($args as $arg) {
				$sum += $arg;
				//$sum=$sum+$arg;
			}

			return $sum;
		}
	}
	$s=new sum();
	echo $s->getSum()."</br/>";//0
	echo $s->getSum(3)."</br/>";//3
	echo $s->getSum(3,4)."</br/>";//7
	echo $s->getSum(3,4,5)."</br/>";//12
	echo $s->getSum(3,4,5,6)."</br/>";//18

?>
