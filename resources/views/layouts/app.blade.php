<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <x-navbar /><!-- Chamando arquivo navbar.blade.php -->
        <div class="container-fluid mt-2">
            <div class="row">
                <nav class="col-md-2">
                    <x-sidebar /><!-- Chamando arquivo sidebar.blade.php -->
                </nav>
                <main class="col-md-10">
                    {{ $slot }}
                </main>  
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
