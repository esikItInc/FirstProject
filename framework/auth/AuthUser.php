<?php

namespace Framework\Auth;

class AuthUser
{
    public function user()
    {
        session_start();
        if (isset($_SESSION['user']))
        {
            return $_SESSION['user'];
        }
        else
        {
            return null;
        }
    }

}