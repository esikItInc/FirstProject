<?php


namespace Framework\Src;

abstract class Model
{
    public $database;

    public function __construct()
    {
        $this->database = new DataBase();
    }

    abstract function setStoragePath($patch);

    public function create($data)
    {
      return  $this->database->create($this->table, $data);
    }
<<<<<<< HEAD
=======
    public function articleCreate($data)
    {
        return  $this->database->articleCreate($this->table, $data);
    }
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8

    public function update($id, $data)
    {
        return  $this->database->update($this->table, $id, $data);
    }

<<<<<<< HEAD
    public function where($key, $value)
    {
        return  $this->database->where($this->table, $key, $value);
    }
=======
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
    public function getId($articles_topic_id)
    {
        return $this->database->getId($this->table, $articles_topic_id);
    }

    function ArticlesId($articles_id)
    {
        return $this->database->ArticlesId($this->table, $articles_id);
    }
<<<<<<< HEAD

=======
    public function userLogin($email, $password)
    {
      return $this->database->userLogin($this->table, $email, $password);
    }
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
   public function get()
    {
        return $this->database->get($this->table);
    }

    public function existTable($table)
    {
        return $this->database->existTable($table);
    }

    public function setTable($table)
    {
        if (!$this->existTable($table)) {
            throw new Exception('Таблица ' . $table . ' не существует в базе данных');
        }
        $this->table = $table;
    }

    public function file($file, Image $image)
    {
        $image->saveImg($file);
    }
}

