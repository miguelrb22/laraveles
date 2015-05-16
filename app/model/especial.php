<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class especial extends Model{

    protected $table = 'categoria_especial';

    protected $fillable = ['id','nombre','descripcion'];
}