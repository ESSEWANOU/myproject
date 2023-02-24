<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// pour eviter de preciser le namespace
use App\Post;

Route::get('/', function () {
    // $name='Yves Essewanou';

    // $isWeekand= date("N")>=6;
    // return view('welcome')->with('name',$name)->with('isWeekand',$isWeekand);

    // injection
    // return view('welcome')->with('name',$name);
       
    //    afficher le contenu de la base de donnée et limiter ça à 1 article
    // $posts=DB::select('SELECT * FROM posts LIMIT 1')[0];

     // on peut egalement renomme un attribut de la base 
     // dump(DB::select('SELECT "title" as "titre" FROM posts'));

    // la Fluent Query Builder(pour afficher le contenu de la table)
     // dump(DB::table('posts')->get());

    // la requette Where
     // dump(DB::table('posts')->where('id','>', 2)->get());

    // on veut recuperer tous les articles qui ont pour title 'juste un titre'
      // dump(DB::table('posts')->wheretitle('juste un titre')->get());

      // orwhere
        //  dump(DB::table('posts')
        // ->where('title','juste un titre')
        // ->orwhere('body','super contenu')
        // ->get());

      // comment inserer un ou plusieurs article dans la base de données
        //   dump(DB::table('posts')->get());
        //  DB::table('posts')->insert([
        //   [
        //   'title'=> 'magnifique titre 1',
        //   'body'=> 'magnifique contenu 1'
        //   ],
           
        //    [
        //   'title'=> 'magnifique titre 2',
        //   'body'=> 'magnifique contenu 2'
        //   ]

        // ]);

       // pour faire la mise à jour
        // dump(DB::table('posts')->get());
         // dump(DB::table('posts')->whereid(1)->update(['title' => 'titre 1', 'body' =>'contenu 1']));

        // pour la supression
        //  DB::table('posts')->where('id',6)->delete();
        // dump(DB::table('posts')->get());
          
          // dd(DB::table('posts'));

    // creation de model(affiche larticle qui a pour identifiant 1)
      // dd(DB::table('posts')->find(1));
       // $post=App\Post::find(1);
        // dd($post->title);

             // creation des nouveaux articles avec des objets

            //       $post= new Post;
            //       $post->title='Mon jolie titre';
            //       $post->body='Mon jolie contenu';
            //       $post->save();
            // // eloquente 
            //       dd(Post::all());

            // Suppression d'une table
            DB::statement('DROP TABLE posts');


     // Si on eut seulement une ligne de la base ou un seul article
     // $post=DB::table('posts')->first();
     // dd($post->title);

      // pour ajouter des articles à al base de données
    // $title="super titre";
    // $body="super contenu";
    // DB::insert('INSERT INTO posts(title,body) VALUES (:title,:body)',[
    //     'title'=>$title,
    //     'body'=>$body 
    // ]);

    // pour affiher seulement un attribu de la base
    // dd($posts->title); 
});



Route::get('/about', function () {
    // $isWeekand= date("N")>=6;
    // return view('page/about',compact('isWeekand'));

    // injection
    return view('page/about');
});

Route::get('/helps', function () {
    // $isWeekand= date("N")>=6;
    // return view('page/helps',compact('isWeekand'));

     // injection
    return view('page/helps');
 });

Route::get('/event', function () {
    $event=[
    'Make PHP Great Again',
    'PHP conference',
    'Meetup TDN',
    'Laravel conference',
    ];
    return view('event/index')->with('event',$event);
});

Route::get('/application', function () {
    return view('layouts/application');
});

