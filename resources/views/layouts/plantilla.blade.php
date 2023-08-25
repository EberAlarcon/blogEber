<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"> --}}
    <title>@yield('title')</title>

    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active {
            color:  red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->

    {{-- Importo lo que tengo en mi archivo de header aqui --}}
    @include('layouts.partials.header')





    @yield('content')

    <!-- footer -->

    @include('layouts.partials.footer')
    <!-- scripts -->
    {{-- Tambien sirve para el diseño de tailwandcss --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</body>
</html>