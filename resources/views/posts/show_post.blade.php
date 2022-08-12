<x-app-layout>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/storage/{{$post->imageUrl}}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$post->user->username}}</div>
            <p class="text-gray-700 text-base">
                {{$post->title}}
            </p>
        </div>
    </div>
</x-app-layout>