<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pulkit Bhardwaj',
            'email' => 'admin@outlook.com',
            'is_admin'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            'password' => password_hash('mypass',PASSWORD_DEFAULT)      
        ]);
    }
}
