<?php

namespace App\Helpers;

use App\Providers\AuthService;
use Illuminate\Http\Request;

class Roles
{
    public static function role(array $roleNames): bool
    {
        return in_array('admin', $roleNames, true);
    }


    public static function isLogged(): bool
    {
        $request = app(Request::class);

        $token = $request->cookies->get(Constants::AUTH_NAME);
        /** @type AuthService $service */
        $service = app(AuthService::class);

        //dd($service->validateToken($token, $data));


        return $token && $service->validateToken($token, $data) && $data?->ttl >= time();
    }
}
