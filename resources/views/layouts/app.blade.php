<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Online')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{route('home.index')}}">Online Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link active" href="{{route('product.index')}}">Products</a>
                <a class="nav-link active" href="/about">About</a>
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                @else
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active"
                           onclick="document.getElementById('logout').submit();">Lo gout</a>
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
    </div>
</header>
<!-- header -->

<div class="container">
    @yield('content')
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                           href="https://twitter.com/danielgarax">
                Daniel Correa
            </a> - <b>Paola Vallejo</b>
        </small>
    </div>
</div>
<!-- footer -->
</body>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</html>
