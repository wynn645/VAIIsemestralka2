<?php

namespace App\Auth;

class LoginAuthentificator extends DummyAuthenticator
{
    public function login($login, $password): bool
    {
        if ($login == $password) {
            $_SESSION['user'] = $login;
            return true;
        }
        return false;
    }
}