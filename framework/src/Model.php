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

    public function update($id, $data)
    {
        return  $this->database->update($this->table, $id, $data);
    }

    public function where($key, $value)
    {
        return  $this->database->where($this->table, $key, $value);
    }
    public function getId($articles_topic_id)
    {
        return $this->database->getId($this->table, $articles_topic_id);
    }

    function ArticlesId($articles_id)
    {
        return $this->database->ArticlesId($this->table, $articles_id);
    }

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

