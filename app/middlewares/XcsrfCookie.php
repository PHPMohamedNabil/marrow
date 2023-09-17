<?php

namespace App\Middlewares;

use Optimus\Onion\LayerInterface;
use Core\Request;
use Core\Response;
use Closure;
use RuntimeException;
use Core\Cookie;

class XcsrfCookie implements LayerInterface
{

    public function peel($request,Closure $next)
    {
    	  $response = $next($request);

           Cookie::set('XcsrfCookie',session_token(),false);
        	return $response;

    }

}