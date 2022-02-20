<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<div class="container my-4">
    <h1 class="text-primary">Hello Laravel with Bootstrap</h1>
    <h1 class="text-success">ทดสอบแสดงฟอนต์ภาษาไทย "พร็อมท์" <i class="fas fa-heart text-danger"></i></h1>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
