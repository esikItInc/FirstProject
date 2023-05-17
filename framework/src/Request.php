<?php

namespace framework\Src;

class Request
{

    private static $intance;

    private static $all = [];

    public static function getIntance()
    {
        if (!self::$intance)
        {
            self::$intance = new self;
        }
        return self::$intance;
    }
    public function all()
    {
        if (!$this->all)
        {
            $this->all['request'] = $_REQUEST;
            $this->all['cookie'] = $_COOKIE;
            $this->all['server'] = $_SERVER;
            $this->all['files'] = $_FILES;
        }
        return $this->all;
    }

}