<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

// Mengambil URI yang telah didekode dari permintaan yang diterima
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Fakta unik: Laravel adalah framework PHP yang sangat populer dan digunakan oleh banyak pengembang untuk membangun aplikasi web yang kompleks.

// File ini memungkinkan kita untuk meniru fungsionalitas "mod_rewrite" Apache dari
// server web PHP bawaan. Ini memberikan cara yang nyaman untuk menguji aplikasi Laravel
// tanpa harus menginstal perangkat lunak server web "nyata" di sini.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false; // Jika URI bukan root dan file ada, kembalikan false untuk menghentikan eksekusi lebih lanjut
}

// Memasukkan file index.php yang merupakan titik masuk aplikasi Laravel
require_once __DIR__.'/public/index.php';

// Identitas:
// Nama: Muhammad Putra Erlangga Syawaludin
// Kelas: XII RPL
// Alamat: Kecamatan Karangploso, Kabupaten Malang
