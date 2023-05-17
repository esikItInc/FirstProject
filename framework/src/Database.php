<?php

namespace Framework\Src;

use Framework\Src\Database\Connection;

class DataBase
{
    public $connection;

    public function __construct()
    {
   $this->connection = Connection::getInstance()->connect();
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
        $colums = [];
        $values = [];

        foreach ($data as $key => $value) {
            $colums[] = $key;
            $values[] = '"'.$value.'"';
        }

        $values = implode(',', $values);
        $values = trim($values);
        $colums = implode(',', $colums);
        $colums = trim($colums);



        mysqli_query($this->connection, "INSERT INTO $table ($colums) VALUES ($values)");
        $maxId = mysqli_query($this->connection, "SELECT max(id) as `id` FROM $table");
        $maxId = mysqli_fetch_assoc($maxId);
        return $this->whereId($table, $maxId['id']);
    }

    public function whereId($table, $id)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE id = $id");
        return mysqli_fetch_assoc($query);
    }

    public function where($table, $key, $value)
    {

        $query = mysqli_query($this->connection, "SELECT * FROM $table WHERE $key = '$value'");
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
