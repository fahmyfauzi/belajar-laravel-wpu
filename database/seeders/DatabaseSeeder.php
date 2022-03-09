<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Fahmy Fauzi',
            'username' => 'fahmyfauzi',
            'email' => 'fahmyfauzii@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('password')
        ]);
        $this->call([
            UserSeeder::class,
            PostSeeder::class
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);


        //     User::create([
        //         'name' => 'Futra',
        //         'email' => 'futradiskha@gmail.com',
        //         'password' => bcrypt('12345')
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Post Pertama',
        //         'category_id' => 1,
        //         'slug' => 'judul-post-pertama',
        //         'excerpt' => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. At architecto, a consequatur nemo ipsa excepturi nulla cupiditate praesentium nam provident est hic esse perspiciatis et earum? Ipsa reprehenderit nesciunt quod?",
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae corrupti nemo autem, quos laborum rem unde earum vitae quidem obcaecati distinctio dignissimos, sapiente sit hic, quae maiores.</p><p> Labore, culpa a! Alias obcaecati beatae adipisci minima fugiat maiores laboriosam tempore aspernatur, laborum praesentium, officia ullam ratione minus culpa magni iure nesciunt dolorem labore! Commodi labore libero fuga pariatur. Minus eveniet accusamus odio consequatur mollitia tempore deleniti, maiores, ad optio quo aliquam, nihil iusto sint ut itaque ea debitis saepe eaque suscipit sed eum repellat tenetur necessitatibus. Culpa incidunt odio necessitatibus cumque eaque non minima vero fuga maxime expedita sapiente laboriosam nesciunt magni asperiores hic corrupti eligendi laudantium natus molestias sed ipsa nostrum, esse dolorum ipsam. Dolorem ut rem quisquam porro esse.</p>',
        //         'user_id' => 1

        //     ]);
        //     Post::create([
        //         'title' => 'Judul Post Kedua',
        //         'category_id' => 2,
        //         'slug' => 'judul-post-kedua',
        //         'excerpt' => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. At architecto, a consequatur nemo ipsa excepturi nulla cupiditate praesentium nam provident est hic esse perspiciatis et earum? Ipsa reprehenderit nesciunt quod?",
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae corrupti nemo autem, quos laborum rem unde earum vitae quidem obcaecati distinctio dignissimos, sapiente sit hic, quae maiores.</p><p> Labore, culpa a! Alias obcaecati beatae adipisci minima fugiat maiores laboriosam tempore aspernatur, laborum praesentium, officia ullam ratione minus culpa magni iure nesciunt dolorem labore! Commodi labore libero fuga pariatur. Minus eveniet accusamus odio consequatur mollitia tempore deleniti, maiores, ad optio quo aliquam, nihil iusto sint ut itaque ea debitis saepe eaque suscipit sed eum repellat tenetur necessitatibus. Culpa incidunt odio necessitatibus cumque eaque non minima vero fuga maxime expedita sapiente laboriosam nesciunt magni asperiores hic corrupti eligendi laudantium natus molestias sed ipsa nostrum, esse dolorum ipsam. Dolorem ut rem quisquam porro esse.</p>',
        //         'user_id' => 1
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Post Ketiga',
        //         'category_id' => 3,
        //         'slug' => 'judul-post-ketiga',
        //         'excerpt' => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. At architecto, a consequatur nemo ipsa excepturi nulla cupiditate praesentium nam provident est hic esse perspiciatis et earum? Ipsa reprehenderit nesciunt quod?",
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae corrupti nemo autem, quos laborum rem unde earum vitae quidem obcaecati distinctio dignissimos, sapiente sit hic, quae maiores.</p><p> Labore, culpa a! Alias obcaecati beatae adipisci minima fugiat maiores laboriosam tempore aspernatur, laborum praesentium, officia ullam ratione minus culpa magni iure nesciunt dolorem labore! Commodi labore libero fuga pariatur. Minus eveniet accusamus odio consequatur mollitia tempore deleniti, maiores, ad optio quo aliquam, nihil iusto sint ut itaque ea debitis saepe eaque suscipit sed eum repellat tenetur necessitatibus. Culpa incidunt odio necessitatibus cumque eaque non minima vero fuga maxime expedita sapiente laboriosam nesciunt magni asperiores hic corrupti eligendi laudantium natus molestias sed ipsa nostrum, esse dolorum ipsam. Dolorem ut rem quisquam porro esse.</p>',
        //         'user_id' => 1
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Post Kemapat',
        //         'category_id' => 3,
        //         'slug' => 'judul-post-keempat',
        //         'excerpt' => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. At architecto, a consequatur nemo ipsa excepturi nulla cupiditate praesentium nam provident est hic esse perspiciatis et earum? Ipsa reprehenderit nesciunt quod?",
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae corrupti nemo autem, quos laborum rem unde earum vitae quidem obcaecati distinctio dignissimos, sapiente sit hic, quae maiores.</p><p> Labore, culpa a! Alias obcaecati beatae adipisci minima fugiat maiores laboriosam tempore aspernatur, laborum praesentium, officia ullam ratione minus culpa magni iure nesciunt dolorem labore! Commodi labore libero fuga pariatur. Minus eveniet accusamus odio consequatur mollitia tempore deleniti, maiores, ad optio quo aliquam, nihil iusto sint ut itaque ea debitis saepe eaque suscipit sed eum repellat tenetur necessitatibus. Culpa incidunt odio necessitatibus cumque eaque non minima vero fuga maxime expedita sapiente laboriosam nesciunt magni asperiores hic corrupti eligendi laudantium natus molestias sed ipsa nostrum, esse dolorum ipsam. Dolorem ut rem quisquam porro esse.</p>',
        //         'user_id' => 1
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Post Kelima',
        //         'category_id' => 1,
        //         'slug' => 'judul-post-kelima',
        //         'excerpt' => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. At architecto, a consequatur nemo ipsa excepturi nulla cupiditate praesentium nam provident est hic esse perspiciatis et earum? Ipsa reprehenderit nesciunt quod?",
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae corrupti nemo autem, quos laborum rem unde earum vitae quidem obcaecati distinctio dignissimos, sapiente sit hic, quae maiores.</p><p> Labore, culpa a! Alias obcaecati beatae adipisci minima fugiat maiores laboriosam tempore aspernatur, laborum praesentium, officia ullam ratione minus culpa magni iure nesciunt dolorem labore! Commodi labore libero fuga pariatur. Minus eveniet accusamus odio consequatur mollitia tempore deleniti, maiores, ad optio quo aliquam, nihil iusto sint ut itaque ea debitis saepe eaque suscipit sed eum repellat tenetur necessitatibus. Culpa incidunt odio necessitatibus cumque eaque non minima vero fuga maxime expedita sapiente laboriosam nesciunt magni asperiores hic corrupti eligendi laudantium natus molestias sed ipsa nostrum, esse dolorum ipsam. Dolorem ut rem quisquam porro esse.</p>',
        //         'user_id' => 2
        //     ]);
        //
    }
}
