<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ Auth::user()->name }}さんのToDoList
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sm:max-w-3xl mx-auto px-6 py-6 bg-white rounded-2xl border">
            <a class="text-3xl mx-5">ToDoList</a>
            <div class="sm:max-w-2xl mx-auto">
                @foreach($posts as $post)


                <div class="mt-4 py-2 px-8 bg-white w-full rounded-2xl border border-gray-800">
                    <div class="flex justify-between">
                        <h1 class="p-2 text-2xl font-semibold">
                            {{$post->title}}
                        </h1>
                        <div class="p-2 flex items-center space-x-2">
                            <a href="{{route('post.edit',$post)}}">
                            <x-primary-button class="px-4 text-lg border border-gray-800">
                                編集
                            </x-primary-button>
                            </a>
                            <form method="post" action="{{route('post.destroy',$post)}}">
                                @csrf
                                @method('delete')
                                <x-primary-button class="px-4 text-lg border border-gray-800">
                                    削除
                                </x-primary-button>
                            </form>
                        </div>
                    </div>   
                    <hr class="w-full border-gray-400"> </hr>
                    <p class="mt-4 p-4 font-semibold">
                        {{$post->body}}
                    </p>

                    <div class="p-4 text-sm font-semibold">
                    <p>
                        {{$post->created_at}}/{{$post->user->name ?? '匿名'}} 
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>