<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Data Mengelolah Pengguna <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">                                    
                            <a class="dropdown-item" href="{{ url('admin/guru') }}">
                                Data Kelola Guru
                        </a>
                        <a class="dropdown-item" href="{{ url('admin/siswa') }}">
                                Data kelola Siswa
                        </a>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Data Mengelolah Kelas <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu">                                    
                                <a class="dropdown-item" href="{{ url('admin/kelas') }}">
                                    Data Kelola Kelas
                            </a>
                            <a class="dropdown-item" href="{{ url('admin/jurusan') }}">
                                    Data kelola Jurusan
                            </a>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Data Mengelolah Mapel <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">                                    
                                    <a class="dropdown-item" href="{{ url('admin/mapel') }}">
                                        Data Kelola Mata Pelajaran
                                </a>
                                <a class="dropdown-item" href="{{ url('admin/jadwal') }}">
                                        Data kelola Jadwal
                                </a>
                        </div>
                    </li>                            
                    
                    @endauth


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
                    @if(Session::has('pesan'))
            <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ Session::get('pesan') }}
            </div>
        @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
