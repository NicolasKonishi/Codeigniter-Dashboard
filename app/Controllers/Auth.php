<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    //login
    public function login()
    {
        return view('Auth/login_frm');

    }
    public function login_submit(){
        echo 'login';
    }

    //sign up
    public function new_account(){
        return view('Auth/new_account_frm');
    }
    public function new_account_submit(){
        echo 'new_account_submit';
    }

    public function forgot_password(){
        return view('Auth/forgot_password_frm');
    }
    public function forgot_password_submit(){
        echo 'forgot_password_submit';
    }
}
