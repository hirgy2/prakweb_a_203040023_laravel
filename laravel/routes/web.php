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
    return view('about',[
        "title" => "About",
        "name" => "Muhammad Rhyamizard Hirgy",
        "email" => "hirgy9@gmail.com",
        "image" => "hirgy.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts',[
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