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

        @if ( Config::get('app.debug') )
          <script type="text/javascript">
            document.write('<script src="//green.dev:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
          </script>
        @endif
    </body>
</html>
