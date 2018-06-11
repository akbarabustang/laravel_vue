<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {!! json_encode(['scrfToken'=>csrf_token(),]) !!} </script>

        <title>Laravel Vue.js</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        

        
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <div class="container">
                <articles></articles>
            </div>
        </div>

    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
