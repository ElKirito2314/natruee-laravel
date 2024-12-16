<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Natruee @yield('titulo')</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/media/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/media/favicon-32x32.png')  }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/media/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/media/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('/media/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.navbar')
        @yield('bloco_conteudo')
        @include('site.layouts._partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
