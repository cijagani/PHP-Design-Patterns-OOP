<?php

class CheckingAccount extends BankAccount{
	
	/**
	 * monthly fee
	 * @var float
	 */
	private $fee;
	
	/**
	 * init checking account with account no, initial amount and
	 * monthly fee
	 * @param string $accountNo
	 * @param float $initialAmount
	 * @param float $fee
	 */
	public function __construct($accountNo,$initialAmount,$fee){
		parent::__construct($accountNo, $initialAmount);
		$this->fee = $fee;
	}
	
	/**
	 *  Deduct monthly fee from balance
	 */
	public function deductFee(){
		parent::withdraw($this->fee);
		//echo $this->fee;
	}
	

	public function __toString(){
		$str = parent::__toString();
		$str .= sprintf("<br/>Montly fee:%0.2f",$this->fee);
		return $str;
	}
}
