<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class franquicias_especiales extends Model{

    protected $table = 'franquicia_has_categoria_especial';

    protected $fillable = ['franquicia_idfranquicia','idcategoria_especial'];
}