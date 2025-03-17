<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'data_karyawan';

    protected $fillable = [
        'nama_karyawan',
        'nik_karyawan',
        'ktp_karyawan',
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
    
    public $timestamps = false;

}
