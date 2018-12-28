<?php
require_once('kint.phar');
/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public.PHP_EOL;
        echo $this->protected.PHP_EOL;
        echo $this->private.PHP_EOL;
    }
}

$obj = new MyClass();
//echo $obj->public.PHP_EOL; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
//$obj->printHello(); // Shows Public, Protected and Private

/*echo "<pre>";
print_r($obj);
echo "</pre>";
*/
//d($obj);

?>