<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prompt_thai/index.css') }}">
    <style>
        body {
            font-family: 'Prompt';
        }
    </style>
</head>

<body>
@include('layoutPage.menu')
@yield('content')
@include('layoutPage.footer')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
