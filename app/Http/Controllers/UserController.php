<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function SignUp( ) {
        return view('user.SignUp');
    }


}
