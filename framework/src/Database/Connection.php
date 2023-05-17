<?php

namespace Framework\Src\Database;

class Connection
{
    private static $instance;
    private $connection;

    public function __clone(): void
    {

    }

    public function __set(string $name, $value): void
    {

    }

    public static function getInstance()
    {
        if (!self::$instance)
        {
            self::$instance =  new self();
        }
        return self::$instance;
    }

    public function connect()
    {
        if(!$this->connection)
        {
            $this->connection = mysqli_connect('localhost', 'root', '', 'box');
        }
        return $this->connection;
    }
}