<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;

class AboutController extends Controller
{
    public function show(){
        //отображение данных на экран

        if (view()->exists('default.about')){

//            $view = view('default.about')->withTitle('Hello World')->render();
//
//            return (new Response($view));
//
//            return response()->json(['name'=>'Hello', 'name1'=>'Hello']);
//
//            return response()->download('robots.txt');
//
//            return redirect('/');
//
//            return response()->myRes('Hello world');

//          DB::insert("INSERT INTO articles (name, text, img) VALUES (?, ?, ?)",
//                ['test1', 'TEXT', 'pic1.jpg']);
//
//           $result=DB::update("UPDATE articles SET name ='TEST 2' WHERE id=3 " );
//
//           $result=DB::delete("DELETE FROM articles WHERE id=?", [3]);
//
//            $result=DB::connection()->getPdo()->lastInsertId();
//
//            $articles=DB::select("SELECT * from articles");
//
//            dump($result);
//            dump($articles); //dd

              $result=DB::select("SELECT title, content from pages WHERE alias= ? ", [ 'about' ]);

              //dump($result);


            return view('default.about')->withTitle('Hello World')->withResult($result);

        }

        abort(404);

    }
}
