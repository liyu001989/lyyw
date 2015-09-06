<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LYYW')</title>

    <link href="favicon.ico" rel="icon">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script data-main="{{ asset('/js/main.js') }}" src="{{ asset('/js/require.js') }}"></script>
</head>
<body>
    {{-- <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LYYW</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/message') }}">Message</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> --}}
    <div class="ui menu">

        <div class="header item">
            <a href="{{ url('/') }}"><img width="16px" height="16px" src="{{ asset('image/logo.png') }}"> LYYW</a>
        </div>
        <a class="item" href="{{ url('/message') }}">Message</a>
        {{-- <div class="ui dropdown item" tabindex="0">
            Dropdown
            <i class="dropdown icon"></i>
            <div class="menu transition hidden" tabindex="-1">
            <div class="item">Another Action</div>
            <div class="item">Something else here</div>
            <div class="divider"></div>
            <div class="item">Separated Link</div>
            <div class="divider"></div>
            <div class="item">One more separated link</div>
        </div> --}}
        <div class="right menu">
            @if (Auth::guest())
                <a class="item" href="{{ url('/auth/login') }}">Login</a>
                <a class="item" href="{{ url('/auth/register') }}">Register</a>
            @else
                <div class="ui dropdown item" tabindex="0">
                    {{ Auth::user()->name }}
                    <i class="dropdown icon"></i>
                    <div class="menu transition hidden" tabindex="-1">
                        <div class="item"><a href="{{ url('/auth/logout') }}">Logout</a></div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @yield('content')

    <!-- Scripts
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/semantic.min.js') }}"></script>
    -->
</body>
</html>
