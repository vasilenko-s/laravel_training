<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Article;

class Core extends Controller
{
    public function getArticle($id) {

        echo $id;

    }

    //list of materials
    public function getArticles(){

//        $articles=DB::table('articles')->value('name');
//        $articles=DB::table('articles')->chunk(2);
//        $articles=DB::table('articles')->select('name', 'id', 'text')->get();
//
//
//
//
//        $articles=Article::all();
//
//        foreach ($articles as $article){
//
//            echo $article->text.'<br />';
//
//        }
//
//        Article::create([
//
//            'name'=>'Blog post',
//            'text'=>'<p>Lorem ipsum dolor sit amet </p>',
//            'img'=>'pic4.jpg'
//
//        ]);

        $user=User::find(1);

        //$country=Country::find(2);

        //dump($user);

        dump($user->articles);



        return;

    }

    public function show() {

        //$data=array(...)
        //return view('default.template', ['title' => 'Hello World']); //key=>value
        return view('default.template')->withTitle('Hello World!');
    }


}
