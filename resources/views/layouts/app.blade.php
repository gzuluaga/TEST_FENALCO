<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{

            /* Ubicación de la imagen */
            background-image: url({{ asset('img/login_background.png') }}) !important;
            /* Para dejar la imagen de fondo centrada, vertical y
            horizontalmente */
            /*background-position: center center !important;*/
            /* Para que la imagen de fondo no se repita */
            background-repeat: repeat  !important;
            /* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */
            background-attachment: fixed  !important;
            /* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */
            background-size: contain  !important;
            /* Se muestra un color de fondo mientras se está cargando la imagen
            de fondo o si hay problemas para cargarla */
            /*background-color: #66999;*/
        }
    </style>
</head>
<body>
    <div id="app" class="mt-2">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
