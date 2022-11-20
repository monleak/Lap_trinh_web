<?php
    function my_autoloader($class) {
        require_once $class.'.class.php';
    }
    spl_autoload_register('my_autoloader');

    $cho = new Cho;
    $cho->old = 10;
    print "Old: ".$cho->getOld()."<br>\n";
?>