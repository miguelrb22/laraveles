<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class franquicias_no_destacadas extends Model{

    protected $table = 'franquicias_no_destacadas';

    protected $fillable = [ 'nombre_comercial' , 'logo_url', 'descripcion', 'subcategoria_id', 'nombre'];
}
//comentario para commit
