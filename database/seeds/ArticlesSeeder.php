<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
//        DB::insert("INSERT INTO 'articles' ('name', 'text', 'img')
//                          VALUES (?, ?, ?)",
//                        [
//                            'Blog post',
//                            '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur cum enim eos esse harum itaque laboriosam nihil, obcaecati provident vel veniam! At autem, beatae consectetur id quisquam sit totam! </p>',
//                            'pic1.jpg'
//                        ]
//                    );

        //2
//        DB::table('articles')->insert([
//            $data;
//        ]);

        //3
        Article::create([

                        'name'=>'Blog post',
                        'text'=>'<p>Lorem ipsum dolor sit amet </p>',
                        'img'=>'pic4.jpg'

                         ]);

    }
}
