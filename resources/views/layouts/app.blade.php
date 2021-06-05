<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-md-center justify-content-start">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item">
                    <a class="nav-link @yield('menu_home')" href="{{ url("/") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menu_siswa')" href="{{ route("siswa.index") }}">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menu_guru')" href="{{ route("guru.index") }}">Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menu_kelas')" href="{{ route("kelas.index") }}">Data Kelas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('content')
    </div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>
