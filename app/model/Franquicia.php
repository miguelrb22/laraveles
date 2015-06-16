<?php
/**
 * Created by PhpStorm.
 * User: juanca
 * Date: 17/4/15
 * Time: 11:54
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class Franquicia extends Model {

    protected $table = 'franquicia';

    protected $fillable = [ 'id','nombre_comercial' , 'ciudad','provincia', 'direccion', 'cp' , 'web', 'logo_url', 'inversion', 'presencia_int', 'royalty',
                            'canon_entrada', 'canon_publicitario', 'duracion_contrato', 'amortizacion', 'requisitos_local', 'locales_propios',
                            'locales_franquiciados', 'dimensiones_local', 'poblacion_minima', 'superficie_minima', 'zona_exclusividad',
                            'perfil_franquiciado', 'zonas_preferentes', 'anyo_creacion', 'inicio_expansion', 'red_spain', 'n_paises', 'nacionalidad',
                            'red_extranjero', 'nombre_franquicia', 'cif', 'fecha_alta_ficha', 'fecha_vencimiento_ficha', 'razon_social', 'fax',
                            'domicilio_facturacion', 'cp_fac', 'domicio_fiscal', 'cp_fiscal', 'domicilio_postal', 'cp_postal', 'nombre_apellidos_contacto',
                            'tf_contacto', 'email_contacto', 'cargo_contacto', 'password', 'user', 'descripcion', 'activo','personal','claves_negocio','poblacion_facturacion','provincia_facturacion','poblacion_fiscal','provincia_fiscal',
                            'provincia_postal','poblacion_postal','email_directo','inversion_p','created_at', 'updated_at'];

}