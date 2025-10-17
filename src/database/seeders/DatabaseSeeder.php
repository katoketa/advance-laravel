<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AuthorsTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        Author::factory(10)->create();
        Book::factory(10)->create();
    }
}
