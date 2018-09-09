<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use  Validator;

class ContactController extends Controller
{
//    protected $request;
//
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }


    public function show(Request $request, $id=FALSE){

//        print_r($request->all());
//        echo '<h1 style="margin-top: 100px; ">'.$request->root().'</h1>';
//
//

        //$request->flash();

        if ($request->isMethod('post')) {

            $rules = [
                'name' => 'required|max:10',
                'email' => 'required|email'
            ];
//
//            //без этого кода не работает возвращение старых данных
//            $validator = Validator::make($request->all(), $rules);
//            if ($validator->fails()) {
//                $request->flash();
//                return view('default.contact', array('title'=>'Contacts'))
//                ->withErrors($validator)->withInput($request->input());
//            }
            // по документации
           //$validateData = $request->validate($rules);

            // Должно работать с этим кодом но не работает (сессия, она включена)
            $this->validate($request, $rules);

//            // Data is valid...
//
           dump($request->all());
//
        }



        return view('default.contact', array('title'=>'Contacts'));

    }
}
