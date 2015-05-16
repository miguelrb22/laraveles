<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class files extends Model{

    protected $table = 'imagenes_franquicia';

    protected $fillable = ['id','nombre','ruta','tipo','franquicia_id','tamaño','nombreOriginal','updated_at','created_at'];
}