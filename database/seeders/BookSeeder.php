<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


public function run()
{
    $authors = Author::all();

    foreach ($authors as $author) {
        Book::factory()->count(1)->create([
            'author_id' => $author->id,
        ]);
    }
}
}
