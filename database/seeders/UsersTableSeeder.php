<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sadio Mane',
            'email' => 'Winger@gmail.com',
            'age' => '28',
            'sex' => 'Male',
            'role' => 'User',
            'phone_no' => '07033716203',
            'password' => bcrypt('password'),
            'remember_token' => null,
        ]);

        DB::table('users')->insert([
            'name' => 'Assisat Osoala',
            'email' => 'Osoala@gmail.com',
            'age' => '28',
            'sex' => 'Female',
            'role' => 'Admin',
            'phone_no' => '07033716203',
            'password' => bcrypt('assisat'),
            'remember_token' => null,
        ]);
    }
}
