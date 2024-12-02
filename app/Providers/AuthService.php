<?php

namespace App\Providers;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    private readonly string $key;
    private const algo = 'HS256';

    public function __construct()
    {
        $this->key = env('JWT_SECRET');
    }

    function handle(Request $request, Closure $next) {
        //print_r($request->headers);
        //exit;
    }

    function getToken(array $payload): string
    {
        return JWT::encode(
            payload: $payload,
            key: $this->key,
            alg: self::algo,
        );
    }

    function validateToken(string $token, &$data): bool
    {
        try {
            $data = JWT::decode($token, new Key(
                keyMaterial: $this->key,
                algorithm: self::algo,
            ));
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    function getTokenData(string $token): array|null
    {

        $this->validateToken(token: $token, data: $decoded);
        return json_decode(json_encode($decoded), true) ?? [];
    }

    function createPassword(string $password): string
    {
        return Hash::make(value: $password);
    }

    function validatePassword(string $password, $hashedPassword): bool
    {
        return Hash::check(value: $password, hashedValue: $hashedPassword);
    }


}
