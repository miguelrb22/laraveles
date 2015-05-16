<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class publicidad extends Model{

    protected $table = 'publicidad';

    protected $fillable =   ['id',
                            'idtipo_publicidad',
                            'url_imagen',
                            'fecha_inicio',
                            'fecha_fin',
                            'franquicia_id',
                            'titulo_carousel',
                            'descripcion_carousel',
                            'url_contenido',
                            'created_at',
                            'updated_at'];
}