<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class franquicia_nom_subcategoria extends Model{

    protected $table = 'franquicia_nom_subcategoria';

    protected $fillable = [ 'nombre_comercial' , 'logo_url', 'inversion', 'descripcion', 'subcategoria_id', 'nombre'];
}
//comentario para commit
