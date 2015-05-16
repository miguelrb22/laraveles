<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class franquicia_subcategoria extends Model{

    protected $table = 'franquicia_subcategoria';

    protected $fillable = ['franquicia_id','subcategoria_id'];
}