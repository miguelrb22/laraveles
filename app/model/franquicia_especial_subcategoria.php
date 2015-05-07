<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 21/4/15
 * Time: 12:34
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class franquicia_especial_subcategoria extends Model{

    protected $table = 'franquicia_especial_subcategoria';

    protected $fillable = [ 'nombre_comercial' , 'ciudad', 'direccion', 'cp' , 'web', 'logo_url', 'inversion', 'presencia_int', 'royalty',
        'canon_entrada', 'canon_publicitario', 'duracion_contrato', 'amortizacion', 'requisitos_local', 'locales_propios',
        'locales_franquiciados', 'dimensiones_local', 'poblacion_minima', 'superficie_minima', 'zona_exclusividad',
        'perfil_franquiciado', 'zonas_preferentes', 'anyo_creacion', 'inicio_expansion', 'red_spain', 'n_paises', 'nacionalidad',
        'red_extranjero', 'nombre_franquicia', 'cif', 'fecha_alta_ficha', 'fecha_vencimiento_ficha', 'razon_social', 'fax',
        'domicilio_facturacion', 'cp_fac', 'domicio_fiscal', 'cp_fiscal', 'domicilio_postal', 'cp_postal', 'nombre_apellidos_contacto',
        'tf_contacto', 'email_contacto', 'cargo_contacto', 'password', 'user', 'descripcion', 'activo','personal','claves_negocio','nombre','subcategoria_id','especial'];
}
//comentario para commit
