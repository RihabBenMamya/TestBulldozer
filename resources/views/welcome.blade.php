<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            width: 250px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <h1 class="navbar-brand">{{ __('TestBulldozer') }}</h1>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                @if (Route::has('login'))
                <div class="top-right links">
                    
                    <a href="{{ url('/home') }}">{{ __('Home') }}</a>
                   
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    
                </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="flex-center position-ref full-height">



        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img src="img/url-shortener.jpg" width="300" height="300" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{{ __('Short links for best results.') }}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{{ __('TestBulldozer') }} - {{ __('Permet de raccourcir les liens.') }}</p>
            </div>
        </header>
    </div>
    <div class="flex-center ">
    <div class="container d-flex align-items-center flex-column">

       
            <a href="{{ route('login') }}" class="button" role="button" aria-pressed="true"> {{ __('Register') }}</a>
        </div>
    </div>
    </div>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">

                    <h3>{{ __('Copyright © TestBulldozer') }}</h3>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">

                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">


                </div>
            </div>
        </div>
    </footer>
</body>

</html>