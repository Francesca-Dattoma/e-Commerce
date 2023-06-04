<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>YOeS</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <x-navbar />
    <x-header title="{{ htmlspecialchars_decode($title)}}" />
    
    
    <div >
        @if (session()->has('message'))
            <div class="alert alert-success my-3 anton-font mb-5">
                {{session('message')}}
            </div>
        @endif

        @if (session()->has('errorMail'))
            <div class="alert alert-danger my-3 anton-font mb-5">
                {{session('errorMail')}}
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