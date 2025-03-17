<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'foto_karyawan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi gambar
            'nama_karyawan' => 'required|string|max:255',
            'nik_karyawan' => 'required|string|unique:data_karyawan,nik_karyawan',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:500',
            'telpon' => 'required|string|max:15',
            'agama' => 'required|string|max:50',
            'nomor_bpjs' => 'nullable|string|max:20',
            'nomor_tenaga_kerja' => 'nullable|string|max:20',
            'tanggal_masuk' => 'required|date',
            'masa_kerja' => 'required|integer|min:0',
            'jabatan' => 'required|string|max:100',
            'gol_darah' => 'nullable|in:A,B,AB,O',
        ]);

        // Format nomor telepon
        $telpon = str_starts_with($request->telpon, '+62') ? $request->telpon : '+62' . ltrim($request->telpon, '0');

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('foto_karyawan')) {
            $imagePath = $request->file('foto_karyawan')->store('karyawan', 'public');
        }

        // Simpan ke database
        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'nik_karyawan' => $request->nik_karyawan,
            'foto_karyawan' => $imagePath,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'telpon' => $telpon,
            'agama' => $request->agama,
            'nomor_bpjs' => $request->nomor_bpjs,
            'nomor_tenaga_kerja' => $request->nomor_tenaga_kerja,
            'tanggal_masuk' => $request->tanggal_masuk,
            'masa_kerja' => $request->masa_kerja,
            'jabatan' => $request->jabatan,
            'gol_darah' => $request->gol_darah,
        ]);

        return redirect()->back()->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $request->validate([
            'foto_karyawan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_karyawan')) {
            // Hapus gambar lama jika ada
            if ($karyawan->foto_karyawan) {
                Storage::disk('public')->delete($karyawan->foto_karyawan);
            }

            // Simpan gambar baru
            $imagePath = $request->file('foto_karyawan')->store('karyawan', 'public');
            $karyawan->update(['foto_karyawan' => $imagePath]);
        }

        return redirect()->back()->with('success', 'Foto karyawan berhasil diperbarui!');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $karyawan = Karyawan::where('id_karyawan', $id)->first();

        if ($karyawan) {
            // Hapus gambar jika ada
            if ($karyawan->foto_karyawan) {
                Storage::disk('public')->delete($karyawan->foto_karyawan);
            }

            $karyawan->delete();
            return response()->json(['status' => true, 'message' => 'Data deleted successfully']);
        }

        return response()->json(['status' => false, 'message' => 'Data not found']);
    }
}
