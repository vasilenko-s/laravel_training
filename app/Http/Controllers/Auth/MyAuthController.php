<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyAuthController extends Controller
{
    //

    public function showLogin() {

        return view('auth.login');
    }
}
