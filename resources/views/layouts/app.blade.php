<!doctype html>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        @guest

                        @else
                            <li class="nav-item dropdown">                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-cog vineta"></i> Configuración
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                        <span class="vineta">1</span> Ejecutivos
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">2</span> Imagenes
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">3</span> SGR
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">4</span> Iva
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">5</span> Paises
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">6</span> Monedas
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">7</span> Uso plataforma
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">8</span> Notaria
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">9</span> Submenus
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">10</span> Submenus actions
                                    </a>
                                    <a class="dropdown-item" href="http://localhost/prueba03/apparchivos/public/archivos"
                                       onclick="">
                                       <span class="vineta">11</span> Carga masiva proyectos
                                    </a>
                                </div>                                
                            </li>                            
                        @endguest
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
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else                            
                            <li class="nav-item dropdown">                                

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            @yield('content')
        </main>
    </div>
</body>
</html>
