<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {

        //$data=array(...)
        //return view('default.template', ['title' => 'Hello World']); //key=>value


//        $path=config('view.paths');
//        return view()->file($path[0].'/default/template2.blade.php')->withTitle('Hello World!');
// нет методов в классах
//  view()->name('default.template', 'myview');
//  return view()->of('myview')->withTitle('Hello World!');

        $array= array(
                     'title' =>'Laravel Project',
                      'data' => [
                            'one' => 'List 1',
                            'two' => 'List 2',
                            'three' => 'List 3',
                            'four' => 'List 4',
                            'five' => 'List 5',
                            ],
                        'dataI'=> ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
                        'bvar' => true,
                        'script'=>"<script>alert('hello')</script>"

                        );

           return view('default.index', $array);

    }
}
