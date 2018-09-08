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

        $request->flash();

//        if ($request->isMethod('post')){
//
////            $request->validate($rules);
//
//            $rules =[
//                'name'=>'required|max:10',
//                'email'=>'required|email'
//            ];
//
//            //возвращение старых данных
//            $validator = Validator::make($request->all(), $rules);
//            if ($validator->fails()) {
//                return back()->withErrors($validator)->withInput();
//            }
//
//            $request->validate($rules);
//
//            // Data is valid...
//
//            dump($request->all());
//
//        }



        return view('default.contact', array('title'=>'Contacts'));

    }
}
