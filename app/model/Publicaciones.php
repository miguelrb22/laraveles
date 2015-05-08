<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model{

    protected $table = 'publicacion';

    protected $fillable = ['id','titulo','contenido','url_imagen','tipo','fecha'];
}
//comentario para commit
