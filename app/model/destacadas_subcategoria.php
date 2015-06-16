<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 17/4/15
 * Time: 11:54
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class destacadas_subcategoria extends Model {

    protected $table = 'destacadas_subcategoria';

    protected $fillable = [ 'nombre_comercial' , 'logo_url', 'inversion', 'descripcion', 'subcategoria_id', 'nombre'];

}