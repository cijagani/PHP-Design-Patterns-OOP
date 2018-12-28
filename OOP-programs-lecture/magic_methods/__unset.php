<?php 
//__unset() is invoked when unset() is used on inaccessible properties.
	class Example {
    private $data = ['a'];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->data)) {
            return null;
        }

        return $this->data[$name];
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

	$example = new Example();

	// Stores 'a' in the $data array with value 15
	$example->a = 15;

	// Retrieves array key 'a' from the $data array
	echo $example->a; // prints 15

	// Attempt to retrieve non-existent key from the array returns null
	echo $example->b; // prints nothing

	// If __isset('a') returns true, then call __unset('a')
	if (isset($example->a)) {
	    	unset($example->a);
	}
 ?>