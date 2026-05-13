<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    </head>
    <body class="bg-background text-on-background min-h-screen relative overflow-x-hidden font-body-md text-body-md">
        <!-- Background Glows -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
            <div class="radial-glow top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="radial-glow bottom-0 right-0 translate-x-1/2 translate-y-1/2" style="background: radial-gradient(circle, rgba(0, 64, 224, 0.05) 0%, rgba(249, 249, 249, 0) 70%);"></div>
        </div>

        <x-layouts.navigasi />
        {{ $slot }}
        <x-layouts.footer />
    </body>
</html>
