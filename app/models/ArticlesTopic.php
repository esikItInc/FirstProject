<?php

namespace App\Models;

use Framework\Src\Model;

class ArticlesTopic extends Model
{
    protected $table = 'articles_topic';
    protected $storagePath;

    public function setStoragePath($path)
    {
        $this->storagePath = $path;
    }
}