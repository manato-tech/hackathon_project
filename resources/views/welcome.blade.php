<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップページ
        </h2>
    </x-slot>

    <main class="flex justify-center my-auto mx-auto bg-white max-w-max">
        <div class="text-center space-y-6">
            <h1 class="text-4xl font-bold mb-6">Aim Higher</h1>
            <intro>少しでもより良い生活の実現のため、あなたの仕事や家事の管理を手助けします。</intro>
            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg text-lg">ログイン</a>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg text-lg">アカウント登録</a>
            </div>
        </div>
    </main>

</x-guest-layout>