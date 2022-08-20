<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
            [
                'name' => 'PHP',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('tags')->insert(
            [
                'name' => 'Javascript',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('tags')->insert(
            [
                'name' => 'Java',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('tags')->insert(
            [
                'name' => 'HTML',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        DB::table('tags')->insert(
            [
                'name' => 'CSS',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
