<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/index');
    }

    public function signup()
    {
        return view('auth/signup');
    }
}
