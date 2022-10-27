<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rhyamizard HIrgy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo id distinctio enim rem natus repudiandae voluptas reprehenderit cum nesciunt laboriosam! Error deleniti amet ipsam commodi? Vel nam non exercitationem unde consequatur quam itaque fuga omnis odio, quod assumenda sapiente eveniet voluptatum natus id culpa. Tempora repudiandae obcaecati ullam tempore corrupti omnis maxime officia in quam ad ducimus quae quos dolor voluptate amet doloremque nesciunt voluptatem asperiores labore sunt, exercitationem animi laborum culpa consectetur? Porro eum perferendis dignissimos, recusandae mollitia cupiditate?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iyan Karbu",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ipsum? Accusamus aspernatur beatae numquam, quo molestiae ipsa voluptatum, officia perferendis, officiis commodi quibusdam voluptate! Deleniti, nostrum odio maiores beatae officiis quasi distinctio quam culpa libero suscipit sequi commodi saepe corrupti aut! Corrupti omnis sit reprehenderit obcaecati ab dolores odio sapiente, suscipit rem recusandae molestiae officia ex dolorem modi voluptates est, doloremque sed? Ducimus nostrum libero ipsa vero, commodi sint quam. A quidem nobis, labore assumenda aliquid veritatis, voluptates corporis natus nam nulla praesentium cum voluptate beatae? Molestiae deleniti expedita eos quis aliquid sed sint est, ab accusantium nihil optio a."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
    }
}
