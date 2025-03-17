<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Karyawan extends Model
{
    protected $table = 'data_karyawan'; // Nama tabel di database

    protected $primaryKey = 'id_karyawan'; // Primary key

    protected $fillable = [
        'nama_karyawan',
        'nik_karyawan',
        'foto_karyawan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telpon',
        'agama',
        'nomor_bpjs',
        'nomor_tenaga_kerja',
        'tanggal_masuk',
        'masa_kerja',
        'jabatan',
        'gol_darah',
    ];

    public $timestamps = true; // Aktifkan timestamps (created_at & updated_at)

    /**
     * Accessor untuk mendapatkan URL gambar karyawan.
     */
    public function getFotoUrlAttribute()
    {
        return $this->foto_karyawan 
            ? Storage::url($this->foto_karyawan) 
            : asset('images/default-profile.png'); // Default image jika tidak ada foto
    }
}
