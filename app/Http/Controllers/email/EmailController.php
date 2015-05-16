<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 21/04/2015
 * Time: 10:12
 */

namespace app\Http\Controllers\email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class EmailController
 * @package app\Http\Controllers\email
 */
class EmailController extends Controller {


    /**
     * @var array|string
     */
    protected $nombre;
    /**
     * @var array|string
     */
    protected $email;
    /**
     * @var array|string
     */
    protected $movil;
    /**
     * @var array|string
     */
    protected $informacion;


    /**
     * @param Request $request
     */
    function __construct(Request $request)
    {
        $this->nombre = $request->input('nombre');
        $this->email = $request->input('email');
        $this->movil = $request->input('movil');
        $this->informacion = $request->input('informacion');
    }


    /**
     *
     */
    public function enviar()
    {

        $data = array
        (
            'nombre' => $this->nombre,
            'email' => $this->email,
            'movil' => $this->movil,
            'informacion' => $this->informacion
        );

        $fromEmail = 'miguelruizbas@gmail.com';
        $fromName = 'Miguel';

        try {

            \Mail::send('emails.informacion', $data, function ($message) use ($fromName, $fromEmail) {
                $message->to($fromEmail, $fromName);
                $message->from($fromEmail, $fromName);
                $message->subject('Nueva solicitud de informacion');
            });

            return 1;


        }catch (Exception $e){ return false;}

    }

}