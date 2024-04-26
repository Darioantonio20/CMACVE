<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMACVE - @yield('title')</title>

    <x-default_metas/>

    <x-default_favicon/>

    <x-default_fonts/>

    <x-default_styles/>

    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    @yield('css')

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{asset('/')}}">
            <img src="{{asset('images/logotipos/logotipo-cmacve.png')}}" title="" alt="CMACVE" class="img-fluid" height="40px" >
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->nombre }} {{ Auth::user()->apellidoPaterno }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="bg-dark footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-md-end my-3">
                    <p class="m-0 small text-white">© @php echo \Carbon\Carbon::now()->year @endphp copyright todos los derechos reservados</p>
                </div>
            </div>
        </div>
</footer>


@yield('modal')

<x-default_scripts/>

<script src="{{asset('js/template_01.js')}}"></script>

@yield('scripts')
</body>
</html>
