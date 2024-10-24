<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nopendaftaran', 'nama', 'alamat', 'jenis_kelamin', 'tgl_lahir', 'poliklinik'
    ];

    // Event creating untuk generate nomor pendaftaran
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pasien) {
            $pasien->nopendaftaran = Pasien::generateNopendaftaran();
        });
    }

    // Fungsi untuk generate nomor pendaftaran
    public static function generateNopendaftaran()
    {
        // Generate nomor unik berdasarkan waktu + random angka
        $timestamp = now()->format('YmdHis');
        $randomNumber = rand(1000, 9999);

        return 'REG' . $timestamp . $randomNumber;
    }
}
