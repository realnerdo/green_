<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        {!! Html::style('css/master.css') !!}
    </head>
    <body>
        @yield('topbar')
        @yield('content')
        @yield('footer')

        {!! Html::script('js/scripts.js') !!}
    </body>
</html>
