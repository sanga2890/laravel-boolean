<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials.home.nav')
        @yield('content')
        @include('partials.home.footer')
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
