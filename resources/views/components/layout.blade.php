<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Maven+Pro:wght@400;500&display=swap" rel="stylesheet">

    <title>YOeS</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <x-navbar />
    <x-header title="{{ htmlspecialchars_decode($title)}}" />
    
    
    <div class="min-vh-100">
        @if (session()->has('message'))
            <div class="alert alert-success my-3 anton-font mb-5">
                {{session('message')}}
            </div>
        @endif

        @if (session()->has('warning'))
            <div class="alert alert-warning my-3">
                {{session('warning')}}
            </div>
        @endif
        
        {{$slot}}
    </div>

    <x-footer />
    @livewireScripts
</body>
</html>