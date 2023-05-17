<?php


namespace App\Models;

use Framework\Src\Model;

class RegUser extends Model
{
    protected $table = 'users_test';
    protected $storagePath;

    public function setStoragePath($path)
    {
        $this->storagePath = $path;
    }
}