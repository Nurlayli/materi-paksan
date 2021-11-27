<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Posts Pertama",
            "slug" => "post-pertama",
            "author" => "Nurlayli Indah Sari",
            "body" => "orem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sunt obcaecati natus incidunt commodi quasi impedit iste excepturi accusantium molestias ad quo neque vel ducimus ipsam officiis quos dicta quas vero aut consequatur eaque quae quibusdam! Non, facilis quo eos dolorum ex culpa modi earum animi ducimus aspernatur, adipisci voluptate libero labore minima distinctio reiciendis vero ut dolorem, porro ad sit? Incidunt fugiat sit dignissimos vero vitae fugit nulla tempore officiis modi distinctio dolore eligendi, accusantium rem qui nostrum aut!"
    
        ],
        [
            "title" => "Posts Nurlayli",
            "slug" => "post-kedua",
            "author" => "Nurlayli",
            "body" => "123orem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sunt obcaecati natus incidunt commodi quasi impedit iste excepturi accusantium molestias ad quo neque vel ducimus ipsam officiis quos dicta quas vero aut consequatur eaque quae quibusdam! Non, facilis quo eos dolorum ex culpa modi earum animi ducimus aspernatur, adipisci voluptate libero labore minima distinctio reiciendis vero ut dolorem, porro ad sit? Incidunt fugiat sit dignissimos vero vitae fugit nulla tempore officiis modi distinctio dolore eligendi, accusantium rem qui nostrum aut!"
        ]
    ];

    public static function all(){
        return collect(self:: $blog_posts);
    }
    
    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
    
}
