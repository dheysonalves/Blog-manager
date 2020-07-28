<?php
class Foo
{
    public $bar;

    public function __construct()
    {
        $this->bar = function () {
            return 42;
        };
    }
}

$obj = new Foo();

// a partir do PHP 5.3.0:
$func = $obj->bar;
echo $func(), PHP_EOL;

// alternativamente, a partir do PHP 7.0.0:
echo ($obj->bar)(), PHP_EOL;

?>
