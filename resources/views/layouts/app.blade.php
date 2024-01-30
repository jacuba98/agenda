<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Agenda') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://bsuite.grupo-pinero.com/bsuite/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <div class="min-h-screen bg-gray-100"> 
        
        @include('layouts.navigation')       
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
@yield('js')

</html>
