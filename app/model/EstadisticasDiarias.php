<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 17/4/15
 * Time: 11:54
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class EstadisticasDiarias extends Model {

    protected $table = 'estadisticas_diarias';

    protected $fillable = [ 'franquicia', 'tipo', 'idtipo_estadistica', 'fecha' ];

}