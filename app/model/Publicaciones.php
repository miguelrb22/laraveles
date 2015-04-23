<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model{

    protected $table = 'publicacion';

    protected $fillable = ['titulo','contenido','url_imagen','tipo'];
}
//comentario para commit
