<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {


    public function run()
    {

        \DB::table('users')->insert([

            'iduser' => 2,
            'user' => 'admin',
            'password' => \Hash::make('admin')

        ]);

    }
}