<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 mx-auto">
            @if(isset(Auth::user()->name))
                @include('layouts.navigation')
            @else
                @include('layouts.header-guest')
            @endif
        <div class="text-center space-y-6">
            <h1 class="text-4xl font-bold mb-6">Aim Higher</h1>
            <intro>少しでもより良い生活の実現のため、あなたの仕事や家事の管理を手助けします。</intro>
            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg text-lg">ログイン</a>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg text-lg">アカウント登録</a>
            </div>
        </div>
    </body>
</html>