<?php
class BankAccount{
	/**
	 * bank account number
	 * @var string bank account number
	 */
	private $accountNumber;
	/**
	 * total balance
	 * @var float total balance
	 */
	private $totalBalance;

	/**
	 * inits bank account with a particular account no and
	 * initial amount
	 * @param string $accountNo
	 * @param float  $initialAmount
	 */
	public function __construct($accountNo, $initialAmount){
		$this->accountNumber = $accountNo;
		$this->totalBalance = $initialAmount;
	}

	/**
	 * deposit money to the bank account
	 * @param float $amount amount to deposit
	 */
	public function deposit($amount){
		$this->totalBalance += $amount;
	}

	/**
	 * withdraw money from the bank account
	 * @param double $amount
	 */
	public function withdraw($amount){
		if($amount > $this->totalBalance)
			die('Not enough money to withdraw');

		$this->totalBalance -= $amount;
	}

	/**
	 * returns total balance
	 * @return float total balance
	 */
	public function getBalance(){
		return $this->totalBalance;
	}

	/**
	 * return bacnk account number
	 */
	public function getAccountNumber(){
		return $this->accountNumber;
	}

	/**
	 * set bank account number
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber){
		$this->accountNumber = $accountNumber;

	}
	
	/**
	 * returns bank account object as a string
	 */
	public function __toString(){
		return sprintf("Account #: %s <br/> Balance:$%0.2f",
						$this->accountNumber, 
						$this->totalBalance);
	}
}