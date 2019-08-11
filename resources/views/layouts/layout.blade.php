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

        @if(Request::is('/'))
            @include('include.homepage_carousell')
        @endif

        <div class="container">
            <div class="homepage row">
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>

                <div class="col-md-4 col-lg-4">
                    @include('include.sidebar')
                </div>
            </div>
        </div>

        <footer class="footer text-center">
            Copyright 2019 &copy; <span class="footer__copyright-name"> jaymaski </span>
        </footer>
        <script src="" async defer></script>
        <script type="text/javascript" src="{{ asset('../../public/js/jQuery-2.1.4.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    </body>
</html>