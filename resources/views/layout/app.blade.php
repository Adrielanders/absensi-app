<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Default Title')</title>
    <script src="{{ asset('JS\jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('JS\jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('JS\bootstrap5.3.2.js') }}"></script>
    <script src="{{ asset('JS\swiper11.js') }}"></script>
    <script src="{{ asset('JS\fontawesome.js') }}"></script>
    <script src="{{ asset('JS\swallalert.js') }}"></script>
    <script src="{{ asset('JS\alert.js') }}"></script>
    <link href="{{ asset('css\global.css') }}" rel="stylesheet">
    <link href="{{ asset('css\bootstrap5.3.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css\swiper11.css') }}" rel="stylesheet">
    <link href="{{ asset('css\googleapis.css') }}" rel="stylesheet">
    <link href="{{ asset('css\fontawesome.css') }}" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div class="logo">HR System</div>
        <ul class="nav-links">
            <li><a href="{{route('Index')}}">Dashboard</a></li>
            <li><a href="{{route('karyawan')}}">Karyawan</a></li>
            <li><a href="#">Departemen</a></li>
            <li><a href="#">Kehadiran</a></li>
            <li><a href="#">Penggajian</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
        <div class="user-menu">
            <div class="user-icon">
                <span>John Doe</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="dropdown-menu">
                <li><a href="#">Profil</a></li>
                <li><a href="#">Pengaturan</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        @yield('body')
    </div>

    <footer>
        <p>&copy; 2025 Kotajati Furindo. All rights reserved.</p>
    </footer>

    <script>
        $(document).ready(function() {
            $(".user-menu").click(function() {
                $(".user-menu").toggleClass("active");
            });
            $(document).click(function(event) {
                if (!$(event.target).closest(".user-menu").length) {
                    $(".user-menu").removeClass("active");
                }
            });
        });
    </script>
</body>