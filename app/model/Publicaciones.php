<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model{

    protected $table = 'publicacion';

    protected $fillable = ['id','franquicia_id','titulo','contenido','url_imagen','tipo','fecha','pertenencia','resumen','fecha_publicacion'];

    public function getRouteKey(){

        $hashids = new \Hashids\Hashids('MySecretSalt');

        return $hashids->encode($this->getKey());
    }
}
//comentario para commit
