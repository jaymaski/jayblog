<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('include.navbar')

        @if(Request::is('about'))
            @include('include.homepage_carousell')
        @endif

        <div class="container">
            <div class="homepage row">
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>

                <div class="col-md-4 col-lg-4">
                    @if(Request::is('/'))
                        <div></div>
                    @else
                        @include('include.sidebar')
                    @endif
                </div>
            </div>
        </div>

        <footer class="footer text-center sticky-bottom">
            Copyright 2019 &copy; <span class="footer__copyright-name"> jaymaski </span>
        </footer>
    </body>
</html>
