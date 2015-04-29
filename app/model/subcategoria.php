<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model{

    protected $table = 'subcategoria';

    protected $fillable = ['id','categoria_id' , 'nombre'];
}