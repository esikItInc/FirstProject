<?php

namespace App\Models;

use Framework\Src\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $storagePath;
    public function setStoragePath($path)
    {
        $this->storagePath= $path;
    }
}