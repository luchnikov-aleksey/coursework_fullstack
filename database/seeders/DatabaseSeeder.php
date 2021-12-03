<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nickname' => 'Administrator',
            'email' => 'adm@mail.ru',
            'password' => bcrypt('adminpass'),
            'picture_url' => 'images/users/default_pic.png',
            'about' => 'Слежу за твоим поведением',
            'role' => 'admin',
            'identifier' => 'Administrator#1'
        ]);
    }
}
