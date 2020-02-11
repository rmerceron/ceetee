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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

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
                            @if (Auth::user()->userType_id == 2)
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                                        <svg viewBox="0 0 28.145 28.145" class="h-6 w-6 fill-current">
                                            <g>
                                                <g>
                                                    <circle cx="9.026" cy="22.371" r="2.086"/>
                                                    <circle cx="25.016" cy="22.371" r="2.086"/>
                                                    <path d="M28.145,7.746c0-0.033-0.016-0.061-0.018-0.094c-0.008-0.071-0.021-0.137-0.041-0.203
                                                    c-0.021-0.064-0.043-0.125-0.072-0.183c-0.031-0.059-0.067-0.109-0.109-0.161c-0.042-0.054-0.086-0.102-0.139-0.146
                                                    c-0.049-0.042-0.101-0.074-0.157-0.106c-0.063-0.035-0.125-0.064-0.195-0.087c-0.03-0.01-0.054-0.031-0.085-0.038
                                                    c-0.04-0.009-0.076,0.001-0.115-0.002c-0.039-0.003-0.072-0.022-0.111-0.022L6.939,6.701c-0.015,0-0.027,0.008-0.042,0.009
                                                    L6.213,4.432C6.081,3.991,5.674,3.688,5.214,3.688H1.043C0.467,3.688,0,4.155,0,4.731c0,0.576,0.467,1.043,1.043,1.043h3.396
                                                    l3.949,13.162c0.132,0.441,0.539,0.742,0.999,0.742h15.294c0.49,0,0.912-0.338,1.019-0.816l2.42-10.888
                                                    c0.009-0.038-0.002-0.075,0.002-0.113C28.127,7.821,28.145,7.786,28.145,7.746z M23.846,17.592H10.163L7.521,8.786l18.281,0.003
                                                    L23.846,17.592z"/>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/">
                                            {{ __('Acceuil') }}
                                        </a>
                                        <a class="dropdown-item" href="/home">
                                            {{ __('Mes commerces') }}
                                        </a>
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
                            @endif
                            @if (Auth::user()->userType_id == 3)
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <svg viewBox="0 0 409.165 409.164" class="h-6 w-6 fill-current">
                                            <g>
                                                <g>
                                                    <path d="M204.583,216.671c50.664,0,91.74-48.075,91.74-107.378c0-82.237-41.074-107.377-91.74-107.377
                                                        c-50.668,0-91.74,25.14-91.74,107.377C112.844,168.596,153.916,216.671,204.583,216.671z"/>
                                                    <path d="M407.164,374.717L360.88,270.454c-2.117-4.771-5.836-8.728-10.465-11.138l-71.83-37.392
                                                        c-1.584-0.823-3.502-0.663-4.926,0.415c-20.316,15.366-44.203,23.488-69.076,23.488c-24.877,0-48.762-8.122-69.078-23.488
                                                        c-1.428-1.078-3.346-1.238-4.93-0.415L58.75,259.316c-4.631,2.41-8.346,6.365-10.465,11.138L2.001,374.717
                                                        c-3.191,7.188-2.537,15.412,1.75,22.005c4.285,6.592,11.537,10.526,19.4,10.526h362.861c7.863,0,15.117-3.936,19.402-10.527
                                                        C409.699,390.129,410.355,381.902,407.164,374.717z"/>
                                                </g>
                                            </g>
                                        </svg>
                                        {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                                        <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/">
                                            {{ __('Acceuil') }}
                                        </a>
                                        <a class="dropdown-item" href="/home">
                                            {{ __('Mes favoris') }}
                                        </a>
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
                            @endif
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
