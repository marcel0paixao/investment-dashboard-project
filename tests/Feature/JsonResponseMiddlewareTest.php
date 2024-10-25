<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Middleware\JsonResponseMiddleware;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseMiddlewareTest extends TestCase
{
    public function test_it_converts_response_to_json()
    {
        $middleware = new JsonResponseMiddleware();

        $request = Request::create('/test', 'GET');
        $response = $middleware->handle($request, function () {
            return new Response('Test content');
        });

        $this->assertEquals('application/json', $response->headers->get('Content-Type'));
        $this->assertJson($response->getContent());
    }
}
