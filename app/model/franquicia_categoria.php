<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class franquicia_categoria extends Model{

    protected $table = 'franquicia_has_categoria';

    protected $fillable = ['franquicia_id','categoria_id'];
}