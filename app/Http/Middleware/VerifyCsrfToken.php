<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];

    /**
     * The number of minutes a CSRF token should be considered valid.
     *
     * @var int
     */
    protected $csrfTokenExpires = 60; // Sesuaikan nilai sesuai kebutuhan Anda
}
