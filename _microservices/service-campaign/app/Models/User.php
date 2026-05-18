<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Lightweight User model for JWT token validation in Campaign service.
 * The actual user data lives in the Auth service (db_auth).
 * This model connects to the same db_auth to validate JWT tokens.
 */
class User extends Authenticatable implements JWTSubject
{
    protected $connection = 'auth_db';

    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return ['role' => $this->role];
    }
}
