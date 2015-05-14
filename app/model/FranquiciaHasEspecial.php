<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 13/05/2015
 * Time: 17:41
 */

namespace app\model;

use Illuminate\Database\Eloquent\Model;


class FranquiciaHasEspecial extends Model{

    protected $table = 'franquicia_has_categoria_especial';

    protected $primaryKey = 'franquicia_idfranquicia';

    protected $fillable = ['franquicia_idfranquicia','idcategoria_especial'];
}