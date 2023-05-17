<?php
    require_once 'vendor/autoload.php';

    function myAutoloader(string $classname)
    {
        require_once __DIR__ . '/' . str_replace('\\', '/', $classname) . '.php';
    }

    spl_autoload_register('myAutoloader');

    require_once 'router.php';

?>