<?php

// Namespace ini digunakan untuk mengorganisir kelas-kelas dalam aplikasi Laravel.
namespace App\Exceptions;

// Importing necessary classes for exception handling.
// Kita mengimport kelas ExceptionHandler untuk menghandle penanganan exception.
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

// Extending the ExceptionHandler class to define the application's exception handler.
// Kita mengextend kelas ExceptionHandler untuk mendefinisikan handler exception aplikasi.
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        // Tidak ada exception yang tidak dilaporkan saat ini.
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // Tidak ada callback yang terdaftar saat ini.
    }
}
// Muhammad Putra Erlangga Syawaludin, XII RPL, Desa Girimoyo, Kecamatan Karangploso, Kabupaten Malang, Jawa Timur.
// Fakta unik: Laravel menggunakan konsep dependency injection untuk mengatur ketergantungan antar komponen.
