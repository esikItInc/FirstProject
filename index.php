<?php
<<<<<<< HEAD
    require_once 'vendor/autoload.php';

    function myAutoloader(string $classname)
    {
        require_once __DIR__ . '/' . str_replace('\\', '/', $classname) . '.php';
    }

    spl_autoload_register('myAutoloader');

    require_once 'router.php';
=======

require_once 'vendor\autoload.php';

function myAutoloader(string $classname)
{
    require_once __DIR__ . '/' . str_replace('\\', '/', $classname) . '.php';
}

spl_autoload_register('myAutoloader');

require_once 'router.php';

>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8

?>