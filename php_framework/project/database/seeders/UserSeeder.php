<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => 'Sheldon Cooper',
            "email" => 'admin@gmail.com',
            "password" => password_hash('mypass', PASSWORD_DEFAULT),
            "is_admin" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
