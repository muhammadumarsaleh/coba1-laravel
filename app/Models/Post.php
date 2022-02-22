<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
