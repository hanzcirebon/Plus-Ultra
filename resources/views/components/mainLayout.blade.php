<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT Explore</title>
    {{-- <x-cssAsset></x-cssAsset> --}}
    @vite('resources/css/app.css')
    {{-- <x-jsAsset></x-jsAsset> --}}
</head>
<body>
    <x-navbar></x-navbar>

    {{ $slot }}

    <x-footer></x-footer>
</body>
</html>