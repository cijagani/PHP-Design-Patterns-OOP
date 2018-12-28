
<?php

require_once('acm3.php');
/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected and private properties.
    public $public = 'Public2';
    protected $protected = 'Protected2';
    private $private = 'Private2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined

?>