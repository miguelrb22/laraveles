<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model{

    protected $table = 'subcategoria';

    protected $fillable = ['categoria_id' , 'nombre'];
}