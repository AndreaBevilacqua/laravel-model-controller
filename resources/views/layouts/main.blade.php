<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller | @yield('title')</title>

    {{-- Vite --}}
    @vite('resources/js/app.js')

    {{-- Cdn --}}
    @yield('cdns')
</head>
<body>
    {{-- Header --}}

    {{-- Main --}}  
    <main class="container mt-4">
        @yield('core-content')
    </main>

    {{-- Footer --}}

    {{-- scripts --}}
    @yield('scripts')
    
</body>
</htmle