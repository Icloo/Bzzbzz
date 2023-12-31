<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Bienvenue à la cité de l'abeille, retrouvez notre miel de qualité et venez visiter notre musée qui interessera petits et grands !">

    <title>La cité de l'abeille</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/c6bc2ecbf1.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['public/css/app.css', 'public/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>

            <div class="loader-container">
                <img src="{{url('/img/logo_bzz.png')}}" style="height: 50vh" class="chargement">
            </div>
            {{ $slot }}

        </main>

    </div>
</body>

</html>