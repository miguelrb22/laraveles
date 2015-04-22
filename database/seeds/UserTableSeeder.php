<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\model\User as User;

class UserTableSeeder extends Seeder {


    public function run()
    {

        /*App\model\User::create([
            'first_name' => 'Miguel',
            'last_name'  => 'Ruiz',
            'username'   => 'admin',
            'email'      => 'hola@domain.com',
            'password'   =>  Hash::make('admin')
        ]);*/

        //inicializamos Faker en modo Español
        $faker = Faker::create('es_ES');

        for($a = 0; $a < 2; $a++) {



            //creamos el user guardando el nombre de la imágen.
            $user = User::create(array(
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastname,
                'username' => $faker->username,
                'email' => $faker->email,
                'password' => Hash::make('admin')

            ));

        }

    }


}