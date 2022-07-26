<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="https://haposoft.com/assets/front/ico/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="https://haposoft.com/assets/front/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://haposoft.com/assets/front/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://haposoft.com/assets/front/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://haposoft.com/assets/front/ico/favicon-16x16.png">
    <!-- end favicon -->
</head>

<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
