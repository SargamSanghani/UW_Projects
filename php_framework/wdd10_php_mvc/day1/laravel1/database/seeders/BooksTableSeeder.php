<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Dune',
            'year_published' => 1975,
            'description' => 'A long description of Dune'
        ]);

        DB::table('books')->insert([
            'title' => 'The Shining',
            'year_published' => 1975,
            'description' => 'A long description of The Shining'
        ]);
    }
}
