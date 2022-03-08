<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'user_id' => rand(1, 3),
                'category_id' => rand(1, 3),
                'title' => $faker->sentence(5, 8),
                'slug' => $faker->slug,
                'excerpt' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
                'body' => collect($faker->paragraphs(mt_rand(5, 10)))
                    ->map(fn ($p) => "<p>$p</p>")
                    ->implode(''),
            ]);
        }
    }
}
