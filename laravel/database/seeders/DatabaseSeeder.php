<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Muhammad Rhyamizard Hirgy',
        //     'email' => 'hirgy9@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Iyan Karbu',
        //     'email' => 'iyan_karbu_gaming@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui ullam magni est quas commodi ad, accusantium assumenda laborum consectetur placeat eaque illum eius quia voluptatum vero explicabo vel? Error at quidem obcaecati iusto. Repellat enim a maxime quidem facere hic rem, ex laudantium voluptatibus soluta aut unde maiores animi voluptas rerum porro, similique sed, sequi illo voluptates explicabo blanditiis quod. Provident debitis cum veniam quae at nihil aspernatur eligendi? Vitae esse sapiente ea quos ut, eligendi iusto impedit, ex omnis sed quaerat, numquam harum. Nisi culpa animi laboriosam nihil optio, eius explicabo sunt, ducimus a error vitae nobis voluptatum libero.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui ullam magni est quas commodi ad, accusantium assumenda laborum consectetur placeat eaque illum eius quia voluptatum vero explicabo vel? Error at quidem obcaecati iusto. Repellat enim a maxime quidem facere hic rem, ex laudantium voluptatibus soluta aut unde maiores animi voluptas rerum porro, similique sed, sequi illo voluptates explicabo blanditiis quod. Provident debitis cum veniam quae at nihil aspernatur eligendi? Vitae esse sapiente ea quos ut, eligendi iusto impedit, ex omnis sed quaerat, numquam harum. Nisi culpa animi laboriosam nihil optio, eius explicabo sunt, ducimus a error vitae nobis voluptatum libero.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui ullam magni est quas commodi ad, accusantium assumenda laborum consectetur placeat eaque illum eius quia voluptatum vero explicabo vel? Error at quidem obcaecati iusto. Repellat enim a maxime quidem facere hic rem, ex laudantium voluptatibus soluta aut unde maiores animi voluptas rerum porro, similique sed, sequi illo voluptates explicabo blanditiis quod. Provident debitis cum veniam quae at nihil aspernatur eligendi? Vitae esse sapiente ea quos ut, eligendi iusto impedit, ex omnis sed quaerat, numquam harum. Nisi culpa animi laboriosam nihil optio, eius explicabo sunt, ducimus a error vitae nobis voluptatum libero.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui ullam magni est quas commodi ad, accusantium assumenda laborum consectetur placeat eaque illum eius quia voluptatum vero explicabo vel? Error at quidem obcaecati iusto. Repellat enim a maxime quidem facere hic rem, ex laudantium voluptatibus soluta aut unde maiores animi voluptas rerum porro, similique sed, sequi illo voluptates explicabo blanditiis quod. Provident debitis cum veniam quae at nihil aspernatur eligendi? Vitae esse sapiente ea quos ut, eligendi iusto impedit, ex omnis sed quaerat, numquam harum. Nisi culpa animi laboriosam nihil optio, eius explicabo sunt, ducimus a error vitae nobis voluptatum libero.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
