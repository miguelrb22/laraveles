<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\model\Franquicia as Franquicia;

class FranquiciaTableSeeder extends Seeder {


    public function run()
    {

        $faker = Faker::create('es_ES');

        for($a = 0; $a < 500; $a++) {

            //creamos el user guardando el nombre de la imágen.
            $user = Franquicia::create(array(
                'nombre_comercial' => $faker->company,
                'ciudad' => $faker->city,
                'direccion' => $faker->address,
                'web' => $faker->url

            ));

        }

    }


}