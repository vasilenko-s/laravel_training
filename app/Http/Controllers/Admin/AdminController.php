<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AdminController extends Controller
{
    //
    public function show() {

        //$user=Auth::user();
        $id=Auth::id();

        dump($id);

        return view('welcome');
    }
}
