<?php

namespace App\Models;

use Framework\Src\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $storagePath;

    public function setStoragePath($path)
    {
        $this->storagePath = $path;
    }
}