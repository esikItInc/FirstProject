<?php

namespace App\Models;

use Framework\Src\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $storagePath;

    public function setStoragePath($path)
    {
        $this->storagePath = $path;
    }
}