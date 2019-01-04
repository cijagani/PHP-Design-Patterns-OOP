<?php
require_once('bankaccount.php');
require_once('savingaccount.php');
require_once('checkingaccount.php');
 
$sa = new SavingAccount('12121424', 2000, 2.5);
echo 'Bank account #' . $sa->getAccountNumber() . '<br/>';
echo 'Balance: $' . $sa->getBalance() . '<br/>';
 
echo 'Adding interest...' . '<br/>';
$sa->addInterest();
 
echo 'Balance: $' . $sa->getBalance();


$ch = new CheckingAccount('12121424', $sa->getBalance(), 100);
d($ch);
echo "<br/>";
echo $ch->deductFee();
echo $ch;
echo 'Balance: $' . $sa->getBalance();
?>