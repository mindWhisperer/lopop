<?php

namespace App\Middlewares;

use App\Helpers\Constants;
use App\Providers\AuthService;
use Symfony\Component\HttpFoundation\Request;

class ApiMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        $token = $request->headers->get(Constants::AUTH_NAME) ?? null;
        /** @type AuthService $service */
        $service = app(AuthService::class);

        if (empty($token) || !$service->validateToken($token, $data) || $data?->ttl < time()) {
            return response(
                [
                    "code" => 401,
                    "message" => "Unauthorized",
                ], 401)
                ->cookie(Constants::AUTH_NAME, '', -1);
        }

        $response = $next($request);
        return $response;
    }
}
