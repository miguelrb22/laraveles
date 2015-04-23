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

    public function handle($request, Closure $next)
    {

        $this->view->share('user', Auth::user());

        return $next($request);
    }

}