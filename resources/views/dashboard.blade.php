@extends('layout.app')
@section('title', 'DASHBOARD')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Dashboard */
    .container {
        padding: 20px;
    }

    /* Statistik */
    .stats {
        display: flex;
        gap: 20px;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    .card {
        flex: 1;
        padding: 20px;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .blue {
        background: #3498db;
    }

    .green {
        background: #2ecc71;
    }

    .red {
        background: #e74c3c;
    }

    .yellow {
        background: #f39c12;
    }

    .purple {
        background: #9b59b6;
    }

    /* Grafik */
    .chart-container {
        max-width: 600px;
        margin: 20px auto;
    }

    /* Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background: #34495e;
        color: white;
    }

    /* Tombol Aksi */
    button {
        padding: 8px 12px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
    }

    .edit-btn {
        background: #3498db;
        color: white;
        margin-right: 5px;
    }

    .delete-btn {
        background: #e74c3c;
        color: white;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .stats {
            flex-direction: column;
        }
    }
</style>
@section('body')
<div class="container">
    <h2>Dashboard Admin HR</h2>
    <p>Selamat datang, Admin!</p>

    <!-- Statistik -->
    <div class="stats">
        <div class="card blue">
            <h3>Total Karyawan</h3>
            <p>250</p>
        </div>
        <div class="card green">
            <h3>Karyawan Hadir</h3>
            <p>200</p>
        </div>
        <div class="card red">
            <h3>Cuti</h3>
            <p>30</p>
        </div>
        <div class="card yellow">
            <h3>Posisi Kosong</h3>
            <p>5</p>
        </div>
    </div>

    <!-- Grafik Kehadiran -->
    <div class="chart-container">
        <canvas id="attendanceChart"></canvas>
    </div>

    <!-- Tabel Karyawan -->
    <h3>Activity Karyawan</h3>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ahmad Setiawan</td>
                <td>Manager</td>
                <td>Keuangan</td>
                <td>Aktif</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Siti Aisyah</td>
                <td>HRD</td>
                <td>SDM</td>
                <td>Aktif</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Rizky Pratama</td>
                <td>Staff</td>
                <td>IT</td>
                <td>Cuti</td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@stop

</html>