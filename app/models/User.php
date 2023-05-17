<?php


namespace App\Models;

use Framework\Src\Model;

class User extends Model
{
    protected $table = 'users_test';
    protected $storagePath;

    public function setStoragePath($path)
    {
        $this->storagePath = $path;
    }
}