<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_karyawan', function (Blueprint $table) {
            $table->id('id_karyawan');
            $table->string('nama_karyawan', 255);
            $table->string('nik_karyawan', 50)->unique();
            $table->string('foto_karyawan')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telpon', 20);
            $table->string('agama', 50);
            $table->string('nomor_bpjs', 50)->nullable();
            $table->string('nomor_tenaga_kerja', 50)->nullable();
            $table->date('tanggal_masuk');
            $table->integer('masa_kerja');
            $table->string('jabatan', 100);
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_karyawan');
    }
};
