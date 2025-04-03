<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
           フォームの追加
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{session('message')}}
                </div>
            @endif
            
            <form method="post" action="{{route('post.store')}}">
                @csrf

                <div class="mt-2">
                    <div class="w-full flex flex-col">
                        <label for="title" class="font-semibold mt-4">件名</label>
                        <input type="text" name="title" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="title">
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">本文</label>
                    <textarea name="body" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="body" cols="30" rows="5" ></textarea>
                </div>

                <div class="mb-4">
                    <x-primary-button type="submit" class="mt-4">
                        送信する
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
