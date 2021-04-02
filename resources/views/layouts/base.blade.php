<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ config('app.name', 'E-vent') }}</title>
        <link rel="shortcut icon" href="{{ $favicon ?? asset('img/favicon.png') }}" />
        <script data-ad-client="ca-pub-8771460495164377" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- CSS Boostrap, Bootstrap Icons -->
        <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}" />
        <link rel="stylesheet" href="{{ url(mix('css/bootstrap-icons.css')) }}" />
        <!-- CSS Font Awesome -->
        <link rel="stylesheet" href="{{ url(mix('css/font-awesome.css')) }}" />
        <!-- CSS app -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}" />
        {{ $css ?? '' }}
    </head>
    <body>
        {{ $slot }}
        <!-- JS Bootstrap -->
        <script src="{{ url(mix('js/bootstrap.js')) }}"></script>
        <!-- JS Font Awesome -->
        <script src="{{ url(mix('js/font-awesome.js')) }}"></script>
        <!-- JS app -->
        <script src="{{ url(mix('js/app.js')) }}"></script>        
        {{ $js ?? '' }}
    </body>
</html>
