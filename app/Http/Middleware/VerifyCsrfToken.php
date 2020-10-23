<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'admin/login',
        'admin/admin-welcome',
        'contact-us',
        'admin/products',
        'reviews',
        'admin/logo',
        'description',
        'flush',
        'login',
        'register',
        'checkout',
        'admin/recover'
    ];
}
