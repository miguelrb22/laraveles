<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Default Filesystem Disk
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default filesystem disk that should be used
	| by the framework. A "local" driver, as well as a variety of cloud
	| based drivers are available for your choosing. Just store away!
	|
	| Supported: "local", "s3", "rackspace"
	|
	*/

	'default' => 'local',

	/*
	|--------------------------------------------------------------------------
	| Default Cloud Filesystem Disk
	|--------------------------------------------------------------------------
	|
	| Many applications store files both locally and in the cloud. For this
	| reason, you may specify a default "cloud" driver here. This driver
	| will be bound as the Cloud disk implementation in the container.
	|
	*/

	'cloud' => 's3',

	/*
	|--------------------------------------------------------------------------
	| Filesystem Disks
	|--------------------------------------------------------------------------
	|
	| Here you may configure as many filesystem "disks" as you wish, and you
	| may even configure multiple disks of the same driver. Defaults have
	| been setup for each driver as an example of the required options.
	|
	*/

	'disks' => [

		'local' => [
			'driver' => 'local',
			'root'   => storage_path().'/app',
		],

        //Images cabecera de imagenes
        'publicaciones' => [
            'driver' => 'local',
            'root'   => public_path().'/images/publicaciones',
        ],
        //Articulos en formato texto
        'articulos' => [
            'driver' => 'local',
            'root'   => public_path().'/articulos',
        ],
        //Imagenes de perfil de las franquicias
        'perfiles' => [
            'driver' => 'local',
            'root'   => public_path().'/images/perfiles',
        ],

        //Imagenes del banner superior de las franquicias
        'carousel' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/carousel',
        ],

        //Imagenes del banner superior de las franquicias
        'banner_sup' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/banner_sup',
        ],


        //Imagenes del banner intermedio de las franquicias
        'banner_int' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/banner_int',
        ],


        //Imagenes en la parte superior de las franquicias
        'sup_derecha' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/sup_derecha',
        ],

        //Imagenes en la parte izquierda de las franquicias
        'izquierda' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/izquierda',
        ],

        //Imagenes en la parte patrocinado buscador
        'patrocinado_b' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/patrocinado_b',
        ],


        //Imagenes en la parte de destacados
        'destacados' => [
            'driver' => 'local',
            'root'   => public_path().'/publicidad/destacados',
        ],


		's3' => [
			'driver' => 's3',
			'key'    => 'your-key',
			'secret' => 'your-secret',
			'region' => 'your-region',
			'bucket' => 'your-bucket',
		],

		'rackspace' => [
			'driver'    => 'rackspace',
			'username'  => 'your-username',
			'key'       => 'your-key',
			'container' => 'your-container',
			'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
			'region'    => 'IAD',
			'url_type'  => 'publicURL'
		],

	],

];
