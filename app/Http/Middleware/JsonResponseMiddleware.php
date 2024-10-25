<?php
namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // verify if response is JSON type
        if ($response instanceof Response && !$response->headers->has('Content-Type')) {
            // converts to JSON
            $response->setContent(json_encode(['data' => $response->getContent()]));
            $response->headers->set('Content-Type', 'application/json');
        }

        return $response;
    }
}
