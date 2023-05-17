<?php

namespace Framework\Src;

<<<<<<< HEAD
use Framework\Src\Database\Connection;

=======
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
class DataBase
{
    public $connection;

    public function __construct()
    {
<<<<<<< HEAD
   $this->connection = Connection::getInstance()->connect();
=======
        $this->connection = mysqli_connect('localhost', 'root', '', 'box');
        if (!$this->connection) {
            throw new Exception('Нет коннекта к бд');
        }
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
    }

    function get($table)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM $table");
        return mysqli_fetch_all($query);
    }
    function getId($table, $articles_topic_id)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE articles_topic_id = $articles_topic_id");
       return mysqli_fetch_all($query);

    }
    function ArticlesId($table, $articles_id)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE articles_id = $articles_id");
        return mysqli_fetch_all($query);

    }
    public function existTable($table)
    {
        return mysqli_query($this->connection, "SELECT * FROM $table");
    }

    function create($table, $data)
    {
<<<<<<< HEAD

=======
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        $colums = [];
        $values = [];
        foreach ($data as $key => $value) {
            $colums[] = $key;
<<<<<<< HEAD
            $values[] = '"'.$value.'"';
        }

=======
            $values[] = $value;
        }
        $data['articles_id'] = intval($data['articles_id']);
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8

        $colums = implode(',', $colums);
        $colums = trim($colums);
        $values = implode(',', $values);
        $values = trim($values);

<<<<<<< HEAD


=======
        mysqli_query($this->connection, "INSERT INTO $table ($colums) VALUES ($values)");
        $maxId = mysqli_query($this->connection, "SELECT max(id) as `id` FROM $table");
        $maxId = mysqli_fetch_assoc($maxId);
        return $this->whereId($table, $maxId['id']);
    }

    function articleCreate($table, $data)
    {
        $colums = [];
        $values = [];
        foreach ($data as $key => $value) {
            $colums[] = $key;
            $values[] = "'".$value."'";
        }

        $colums = implode(',', $colums);
        $colums = trim($colums);
        $values = implode(',', $values);
        $values = trim($values);
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8

        mysqli_query($this->connection, "INSERT INTO $table ($colums) VALUES ($values)");
        $maxId = mysqli_query($this->connection, "SELECT max(id) as `id` FROM $table");
        $maxId = mysqli_fetch_assoc($maxId);
        return $this->whereId($table, $maxId['id']);
    }
<<<<<<< HEAD
=======



>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
    public function whereId($table, $id)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE id = $id");
        return mysqli_fetch_assoc($query);
    }

<<<<<<< HEAD
    public function where($table, $key, $value)
    {

        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE $key = '$value'");
=======
    public function userLogin($table, $email, $password)
    {

        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE name = $email AND password = $password");
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        return mysqli_fetch_assoc($query);

    }

    public function update($table, $id, $data)
    {
        $values = '';
        foreach ($data as $key => $value) {
            $values .= "$key = '$value',";
        }
        $values = rtrim($values, ',');
        mysqli_query($this->connection, "UPDATE $table SET $values WHERE id = $id");
    }
}
