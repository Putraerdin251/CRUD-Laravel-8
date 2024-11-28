<?php

// File ini berisi konfigurasi kernel untuk aplikasi Laravel.
namespace App\Console;

// Importing necessary classes for scheduling and kernel operations.
// Kita mengimport kelas Schedule untuk mengatur jadwal perintah dan ConsoleKernel untuk mengatur kernel konsol.
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

// Extending the ConsoleKernel class to define the application's console kernel.
// Kita mengextend kelas ConsoleKernel untuk mendefinisikan kernel konsol aplikasi.
class Kernel extends ConsoleKernel
{
    /**
     * Array of Artisan commands provided by the application.
     *
     * @var array
     */
    protected $commands = [
        // Tidak ada perintah yang terdaftar saat ini.
    ];

    /**
     * Method to define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Contoh penggunaan untuk menjadwalkan perintah 'inspire' untuk dijalankan setiap jam.
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Method to register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Memuat perintah dari direktori Commands.
        // Kita memuat perintah dari direktori Commands untuk mendaftarkan perintah yang tersedia.
        $this->load(__DIR__.'/Commands');

        // Memuat rute konsol dari file routes/console.php.
        // Kita memuat rute konsol dari file routes/console.php untuk mengatur rute konsol.
        require base_path('routes/console.php');
    }
}
// Muhammad Putra Erlangga Syawaludin, XII RPL, Desa Girimoyo, Kecamatan Karangploso, Kabupaten Malang, Jawa Timur.
// Fakta unik: Laravel adalah framework PHP yang dikembangkan oleh Taylor Otwell dan pertama kali dirilis pada tahun 2011.
// Sejarah pengetahuan yang bermanfaat: Laravel menggunakan konsep dependency injection untuk mengatur ketergantungan antar komponen.
