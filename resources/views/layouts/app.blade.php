<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <p>Это главный сайдбар!</p>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>