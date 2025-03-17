<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;

class karyawanController extends Controller
{

    public function store(Request $request)
    {
        $karyawan = Karyawan::create([
            'nama_karyawan' =>  $request->nama_karyawan,
            'nik_karyawan' => $request->nik_karyawan,
            'ktp_karyawan' => $request->ktp_karyawan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'telpon' => str_starts_with($request->telpon, '+62') ? $request->telpon : '+62' . ltrim($request->telpon, '0'),
            'agama' => $request->agama,
            'nomor_bpjs' => $request->nomor_bpjs,
            'nomor_tenaga_kerja' => $request->nomor_tenaga_kerja,
            'tanggal_masuk' => $request->tanggal_masuk,
            'masa_kerja' => $request->masa_kerja,
            'jabatan' => $request->jabatan,
            'gol_darah' => $request->gol_darah,
        ]);

        return redirect()->back()->with('success', 'Data Karyawan Berhasil Disimpan!');
    }

    public function delete(Request $request){
        $id = $request->id;
        $Karyawan = new Karyawan;

        $checkData = $Karyawan->where('id_karyawan', $id)->delete();
        return response()->json(['status' => true,'message' => 'Data deleted successfully']);
    }
}
