<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {


    public function run()
    {

        App\User::create([
            'first_name' => 'Miguel',
            'last_name'  => 'Ruiz',
            'username'   => 'admin',
            'email'      => 'hola@domain.com',
            'password'   =>  Hash::make('admin')
        ]);

    }
}