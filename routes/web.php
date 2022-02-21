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
    return view('home');
});

Route::get('/home', function () {
    return view('home', [
        "title"  => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Umar Saleh",
        "email" => "01muh.umar@gmail.com",
        "image" => "umar.JPG"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Umar Saleh",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis laborum deserunt inventore in molestiae quasi,
            deleniti et omnis at animi? Pariatur reprehenderit facilis praesentium quo fugiat deleniti cumque magni consequuntur laborum.
            Aperiam, minima, ipsum quam nisi dolore doloremque, iure aliquid ipsa iste dolor autem facere porro a tempore cupiditate
            eligendi atque sit! Ab esse, praesentium repudiandae aspernatur voluptatibus dolores dolore nisi beatae eius quidem cupiditate
            sunt voluptates quis accusamus id illum quod dolorem totam hic corrupti minima autem aperiam? Esse."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Balqis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio assumenda nihil itaque dicta? Laudantium dolorem,
            optio ratione consequatur nisi eos illum asperiores provident a ad cupiditate, porro, id totam eveniet? Accusantium, fugit
            eaque eveniet nesciunt incidunt error cumque deserunt dolore expedita sint velit illum qui repudiandae dicta ea fuga optio
            blanditiis aliquid quasi facilis exercitationem voluptatibus inventore natus iusto. Magnam beatae blanditiis et sunt provident
            labore, recusandae accusantium consequatur nemo quibusdam nobis itaque voluptate libero, neque voluptatem tenetur quaerat.
            Hic ut assumenda laboriosam sit! Quo aspernatur autem dicta neque sint illum maxime aliquid doloribus, alias laudantium blanditiis, deleniti facere possimus."
        ]
    ];

    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Umar Saleh",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis laborum deserunt inventore in molestiae quasi,
            deleniti et omnis at animi? Pariatur reprehenderit facilis praesentium quo fugiat deleniti cumque magni consequuntur laborum.
            Aperiam, minima, ipsum quam nisi dolore doloremque, iure aliquid ipsa iste dolor autem facere porro a tempore cupiditate
            eligendi atque sit! Ab esse, praesentium repudiandae aspernatur voluptatibus dolores dolore nisi beatae eius quidem cupiditate
            sunt voluptates quis accusamus id illum quod dolorem totam hic corrupti minima autem aperiam? Esse."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Balqis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio assumenda nihil itaque dicta? Laudantium dolorem,
            optio ratione consequatur nisi eos illum asperiores provident a ad cupiditate, porro, id totam eveniet? Accusantium, fugit
            eaque eveniet nesciunt incidunt error cumque deserunt dolore expedita sint velit illum qui repudiandae dicta ea fuga optio
            blanditiis aliquid quasi facilis exercitationem voluptatibus inventore natus iusto. Magnam beatae blanditiis et sunt provident
            labore, recusandae accusantium consequatur nemo quibusdam nobis itaque voluptate libero, neque voluptatem tenetur quaerat.
            Hic ut assumenda laboriosam sit! Quo aspernatur autem dicta neque sint illum maxime aliquid doloribus, alias laudantium blanditiis, deleniti facere possimus."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
