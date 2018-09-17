<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
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



    //ручная валидация

//    public function store(Request $request)
//    {
//
//        if ($request->isMethod('post')) {
//
//          $messages=[
//              'name.required' => "Поле :attribute Ай-йа-йай",
//              ];
//
//            $rules = [
//                'name' => 'required|max:10',
//            ];
//
//            $validator = Validator::make($request->all(), $rules, $messages);
//
//            if ($validator->fails()) {
//
//                return redirect()->route('contact')
//                   ->withErrors($validator)->withInput();
//            }
//
//
//        }
//        return view('default.contact');
//
//    }

    //полуавтоматическая валидация

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $messages=[ ];
            $rules = [ ];

            $this->validate($request, $rules, $messages);

        }
        return view('default.contact');

    }

//
//    public function store(ContactRequest $request)
//    {
//        dump($request->all());
//
//        return view('default.contact');
//
//    }


    public function show()
    {
        return view('default.contact', array('title' => 'Contacts'));

    }
}


