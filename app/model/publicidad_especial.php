<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class publicidad_especial extends Model{

    protected $table = 'publicidad_especial';

    protected $fillable = ['idtipo_publicidad',
                            'logo_url',
                            'inicio',
                            'final',
                            'nombre_comercial',
                            'id',
                            'nombre'];
}