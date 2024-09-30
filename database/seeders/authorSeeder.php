<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'nawal',
            'email' => 'nawal@gmail.com',
            
        ]);

        Author::create([
            'name' => 'hicham',
            'email' => 'hicham@gmail.com',
            
        ]);
        Author::create([
            'name' => 'jamaa',
            'email' => 'jamaa@gmail.com',
            
        ]);
    }
}
