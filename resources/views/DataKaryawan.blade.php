@extends('layout.app')
@section('title', 'DATA KARYAWAN')

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f9fa;
    }

    .container {
        margin-top: 40px;
    }

    .table th {
        background: #007bff;
        color: white;
    }

    .btn-add {
        margin-bottom: 15px;
    }

    .modal-content {
        border-radius: 10px;
    }
</style>
@section('body')
<div class="container">
    <h2 class="text-center mb-4">Daftar Karyawan</h2>
    <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
        <i class="fas fa-plus"></i> Tambah Karyawan
    </button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIK KARYAWAN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>JABATAN</th>
                <th>MASA KERJA</th>
                <th>ACTION</th>
            </tr>
        </thead>
        @foreach($Data as $dt)
        <tbody id="employeeTable">
            <tr>
                <td>{{$dt->nik_karyawan}}</td>
                <td>{{$dt->nama_karyawan}}</td>
                <td>{{ $dt->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{$dt->jabatan}}</td>
                <td>{{$dt->masa_kerja}}</td>
                <td>
                    <button class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<!-- Modal Tambah Karyawan -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                        <div class="mb-3">
                                <label for="nik_karyawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="nik_karyawan" class="form-label">NIK Karyawan</label>
                                <input type="text" class="form-control" id="nik_karyawan" name="nik_karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="ktp_karyawan" class="form-label">KTP Karyawan</label>
                                <input type="text" class="form-control" id="ktp_karyawan" name="ktp_karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="telpon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="telpon" name="telpon" value="+62" required>
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-control" id="agama" name="agama" required>
                                    <option value="" disabled selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Kepercayaan Lain">Kepercayaan Lain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_bpjs" class="form-label">Nomor BPJS</label>
                                <input type="text" class="form-control" id="nomor_bpjs" name="nomor_bpjs">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_tenaga_kerja" class="form-label">Nomor Tenaga Kerja</label>
                                <input type="text" class="form-control" id="nomor_tenaga_kerja" name="nomor_tenaga_kerja">
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="masa_kerja" class="form-label">Masa Kerja (Tahun)</label>
                                <input type="number" class="form-control" id="masa_kerja" name="masa_kerja" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                            </div>
                            <div class="mb-3">
                                <label for="gol_darah" class="form-label">Golongan Darah</label>
                                <select class="form-control" id="gol_darah" name="gol_darah">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

    });
</script>

@stop