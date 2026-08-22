<?php

namespace App\Middleware;

class AuthMiddleware
{
    public function handle(array $request): bool
    {
        $authHeader = $request['headers']['Authorization'] ?? $_SERVER['HTTP_AUTHORIZATION'] ?? null;
        if (!$authHeader) {
            return false;
        }

        return str_starts_with($authHeader, 'Bearer ');
    }
}