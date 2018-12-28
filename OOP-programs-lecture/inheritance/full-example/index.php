<?php
require_once('bankaccount.php');
require_once('savingaccount.php');
 
$sa = new SavingAccount('12121424', 2000, 2.5);
 
echo 'Bank account #' . $sa->getAccountNumber() . '<br/>';
echo 'Balance: $' . $sa->getBalance() . '<br/>';
 
echo 'Adding interest...' . '<br/>';
$sa->addInterest();
 
echo 'Balance: $' . $sa->getBalance();
?>