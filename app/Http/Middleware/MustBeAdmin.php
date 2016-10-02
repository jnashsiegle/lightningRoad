<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class MustBeAdmin {

     /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    
      public function handle($request, Closure $next)
    {
        if ( ! $this->auth->user()->isAdmin())
        {
            if ($request->ajax())
            {
                return response('Forbbiden.', 403);
            }
            else
            {
                /*throw new AccessDeniedHttpException;*/
                return redirect('adminP');
            }
        }

        return $next($request);
    }

}