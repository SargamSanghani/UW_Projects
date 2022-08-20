<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Steve George',
            'email' => 'edu@pagerange.com',
            'password' => password_hash('mypass', PASSWORD_DEFAULT),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);
        DB::table('users')->insert([
            'name' => 'Steve George',
            'email' => 'steve@pagerange.com',
            'password' => password_hash('mypass', PASSWORD_DEFAULT),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
    }
}
