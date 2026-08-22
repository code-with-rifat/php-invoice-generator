<?php

namespace App\Models;

class User
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public string $role = 'user',
        public bool $isActive = true
    ) {}

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}