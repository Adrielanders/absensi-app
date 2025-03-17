<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <script src="{{ asset('JS\bootstrap5.3.2.js') }}"></script>
    <script src="{{ asset('JS\swiper11.js') }}"></script>
    <link href="{{ asset('css\global.css') }}" rel="stylesheet">
    <link href="{{ asset('css\bootstrap5.3.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css\swiper11.css') }}" rel="stylesheet">
    <link href="{{ asset('css\googleapis.css') }}" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div class="logo">HR System</div>
        <ul class="nav-links">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Karyawan</a></li>
            <li><a href="#">Departemen</a></li>
            <li><a href="#">Kehadiran</a></li>
            <li><a href="#">Penggajian</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
        <button class="logout-btn">Logout</button>
    </div>
    <div class="content">
        @yield('body')
    </div>
    <footer>
        <p>&copy; 2025 Kotajati Furindo. All rights reserved.</p>
    </footer>
</body>