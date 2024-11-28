<?php

// Mengimpor antarmuka Kernel dari Laravel untuk menangani permintaan HTTP.
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// Mendefinisikan waktu mulai aplikasi Laravel untuk pengukuran performa.
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| Jika aplikasi dalam mode pemeliharaan / demo melalui perintah "down",
| kita akan memerlukan file ini agar template yang sudah dirender dapat ditampilkan
| sebagai pengganti memulai framework, yang bisa menyebabkan pengecualian.
| Fakta unik: Mode pemeliharaan memungkinkan pengembang untuk melakukan perbaikan
| tanpa mengganggu pengguna.
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer menyediakan pemuat kelas yang nyaman dan otomatis untuk
| aplikasi ini. Kita hanya perlu memanfaatkannya! Kita akan memuatnya
| ke dalam skrip di sini sehingga kita tidak perlu memuat kelas secara manual.
| Fakta unik: Autoloading membantu mengurangi waktu pengembangan dengan
| menghindari pemanggilan manual setiap kelas.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Setelah kita memiliki aplikasi, kita dapat menangani permintaan yang masuk
| menggunakan kernel HTTP aplikasi. Kemudian, kita akan mengirimkan respons
| kembali ke browser klien ini, memungkinkan mereka menikmati aplikasi kita.
| Fakta unik: Laravel menggunakan pola desain MVC (Model-View-Controller)
| untuk memisahkan logika aplikasi dari tampilan.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

// Membuat instance dari kernel HTTP aplikasi.
$kernel = $app->make(Kernel::class);

// Menangani permintaan dan mengirimkan respons.
$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

// Mengakhiri siklus permintaan dan respons.
$kernel->terminate($request, $response);

// Muhammad Putra Erlangga Syawaludin, XII RPL, Kecamatan Karangploso, Kabupaten Malang.
