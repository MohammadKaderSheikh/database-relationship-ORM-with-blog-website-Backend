<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'arif',
            'email' => 'arifbillahsheikh6@gmail.com',
            'password' => '12345', // You can use bcrypt() to hash the password
        ]);
    }
}
