<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>IT Explore</title>
        {{-- <x-cssAsset></x-cssAsset> --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        {{-- <x-jsAsset></x-jsAsset> --}}
    </head>
    <body>
        <x-navbar></x-navbar>

        {{ $slot }}

        <x-footer></x-footer>
    </body>
</html>