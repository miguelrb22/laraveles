<?php namespace app\Http\Middleware;

use \Auth;
use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\View\Factory as View;

class ShareUser implements Middleware {

    /**
     * @var View
     */
    private $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     * @internal param View $view
     *
     */
    public function handle($request, Closure $next)
    {
        // Compartimos el usuario logueado (de haberlo) en la variable
        // user. Se podrá acceder desde cualquier vista del sistema
        // al haberse compartido. Retorna null si no hay usuario.
        $this->view->share('user', Auth::user());

        return $next($request);
    }

}