<?php

namespace App;

class Application extends \Illuminate\Foundation\Application
{
    public function databasePath($path = '')
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'DataLayer'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
