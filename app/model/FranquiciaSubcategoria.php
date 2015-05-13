<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 13/05/2015
 * Time: 17:41
 */

namespace app\model;

use Illuminate\Database\Eloquent\Model;


class FranquiciaSubcategoria extends Model{

    protected $table = 'franquicia_subcategoria';

    protected $primaryKey = 'franquicia_id';

    protected $fillable = ['franquicia_id','subcategoria_id'];
}