<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' ,[
        "title" => "About",
        "name" => "Michael Rivaldo",
        "email" => "michael.rivaldo@binus.ac.id",
        "image" => "MichaelRivaldo.jpg"
    ]);

});



Route::get('/loop', function () {
    $blog_post = [
        [
            "title" => "Mantap",
            "author" => "Michael Rivaldo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, rerum neque. Aliquam quidem assumenda molestias fugit a beatae dolorum dicta omnis dolorem consequatur. Aut sed facilis officia voluptatem temporibus, accusantium maiores nulla ducimus perferendis natus iste esse quod voluptatibus reprehenderit, at corrupti repellendus saepe atque impedit distinctio. Similique vitae esse iure adipisci architecto aliquam quas? Provident quas inventore exercitationem sunt error hic corrupti tempora molestias dolor. Eligendi placeat odit possimus quasi provident itaque, distinctio vel quam doloribus adipisci quidem nihil."
        ],
        [
            "title" => "Kece",
            "author" => "Kevin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum cupiditate possimus, non tempora explicabo nulla, iure facere, expedita ab eum amet quidem? Id a provident omnis expedita accusamus praesentium inventore ad veniam nihil quidem. Beatae mollitia deserunt cumque qui ad sapiente est voluptas maiores, omnis repellendus dolor nam doloremque aut. Possimus delectus, adipisci sunt impedit, ab ducimus, eum rem fuga in hic culpa alias quia nisi et! Quidem totam assumenda velit ullam voluptas vitae iste id! Aperiam deleniti nesciunt sint dolorem recusandae optio, perferendis, exercitationem doloribus temporibus nihil eaque similique?"
        ],
    
    ];
    return view('loop', [
        "title" => "Loop",
        "posts" => $blog_post
    ]);
});


