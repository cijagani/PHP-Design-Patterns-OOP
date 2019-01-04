<?php  

require_once('classes.php');
$email = new EmailAddress();
$email->setEmailAddress("trueline.chirag@gmail.com");
 
$address = new EmailAddressDisplayAdapter($email);
 
echo($address->getAddressType() . "\n") ;
echo($address->getAddressText());
?>