<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tratnjek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <footer>
            <div class="container">
                <p>Vse pravice pridržane Tilen Tratnjek</p>
            </div>
        </footer>
    </body>
</html>

