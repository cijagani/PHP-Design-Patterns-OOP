<?php
class AddressDisplay
{
	private $addressType;
	private $addressText;

	public function setAddressType($addressType)
	{
		$this->addressType = $addressType;
	}

	public function getAddressType()
	{
		return $this->addressType;
	}

	public function setAddressText($addressText)
	{
		$this->addressText = $addressText;
	}

	public function getAddressText()
	{
		return $this->addressText;
	}
}

class EmailAddress
{
	private $emailAddress;
	
	public function getEmailAddress()
	{
		return $this->emailAddress;
	}
	
	public function setEmailAddress($address)
	{
		$this->emailAddress = $address;
	}
}


class EmailAddressDisplayAdapter extends AddressDisplay
{
	public function __construct($emailAddr)
	{
		$this->setAddressType("email");
		$this->setAddressText($emailAddr->getEmailAddress());
	}
}

?>
