<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class PaquetesActivos extends Model
{

    protected $table = 'paquetes_activos';

    protected $fillable = [
        'carousel',
        'banner_sup',
        'destacados',
        'sup_derecha',
        'izquierda',
        'especial_lc',
        'especial_ex',
        'especial_ba',
        'especial_re',
        'destacado_categoria',
        'patrocinado_b'
    ];

}