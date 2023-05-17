<?php

namespace App\Services;

use App\Interfaces\Image;


class UserStorageServices implements Image
{
    public function saveImg($file)
    {
        move_uploaded_file($file, 'C:\OSPanel\domains\iamprogramist.loc\storage\users\\'.$file);
    }
}