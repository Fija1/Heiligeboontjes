<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'HeiligeBoontjes') }} | @yield('title') </title>

    <!-- Styles -->
    <link href="{{elixir('css/app.css')}}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    @yield('head')

</head>
<body>

<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <img src="/assets/img/Logo-heilige-boontjes.png" alt="" class="logo pull-left">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'HeiligeBoontjes') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
            {{--</ul>--}}

            <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" id="username" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/profile') }}">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/profile/edit/'.Auth::user()->id) }}">
                                        Edit profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status')  }}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-success">
            {{ Session::get('status')  }}
        </div>
    @endif

    @yield('content')

    <footer class="footer">
        <div class="container">
            <p class="text-center">Heiligeboontjes 2016&reg</p>
        </div>
    </footer>

</div>


<!-- Scripts -->
<script src="/js/app.js"></script>

@yield('footer')
</body>
</html>
