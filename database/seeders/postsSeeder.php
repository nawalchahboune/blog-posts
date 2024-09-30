<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Premier article',
            'content' => 'Ceci est le contenu du premier article.',
            'author' => 'nawal'
        ]);

        Post::create([
            'title' => 'Deuxième article',
            'content' => 'Ceci est le contenu du deuxième article.',
            'author' => 'hicham'
        ]);
    }
}
