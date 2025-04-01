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

            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        お問い合わせ
                    </h2>
                </div>
            </header>

            <div class="py-12">
                <main class="w-full sm:max-w-2xl mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <div class="flex justify-center my-auto bg-white max-w-max">
                        <div class="text-center space-y-6">
                            <h1 class="text-4xl font-bold mb-6">お問い合わせフォーム</h1>
                            <intro>ご意見、不具合等ございましたら、下記のフォームに入力後に送信をクリックしてください。</intro>
                            <form>
                                @csrf

                                <div class="w-full flex flex-col">
                                    <textarea name="body" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="body" cols="30" rows="5" >
                                    </textarea>
                                </div>

                                
                                <x-primary-button type="submit" class="mt-4">
                                    送信する
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>