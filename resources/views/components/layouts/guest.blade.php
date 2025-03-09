<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <title>{{ $title ?? 'Guest Title' }}</title>
</head>

<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
    @livewireScripts
</body>

</html>
