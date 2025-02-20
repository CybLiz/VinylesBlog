<x-layout>
    <x-slot:heading>
        {{-- <h1> {{ $vinyle['title'] }}</h1> --}}
    </x-slot:heading>
    <div class="flex items-center space-x-6 p-6 bg-white rounded-md shadow-md">
        <img src="{{ $vinyle['img'] }}" class="w-48 h-48 object-cover rounded-md" alt="{{ $vinyle['title'] }}">
    
        <div class="flex flex-col space-y-2">
            <h3 class="text-xl font-semibold">{{ $vinyle['title'] }}</h3>
            <p class="text-lg text-gray-600">{{ $vinyle['artist'] }}</p>
            <p class="text-gray-500">{{ $vinyle['country'] }}</p>
            <p class="text-gray-400">{{ $vinyle['birth_year'] }}</p>
            <p class="text-gray-700">{{ $vinyle['description'] }}</p>
        </div>

        <div>
            {{-- {{dd($comments)}} --}}
            @foreach($vinyle->comment as $comment)
            <p class="text-gray-700">{{ $comment->content }}</p>
            <p class="text-gray-700"><b>{{ $comment->user->name }}</b></p>

            @endforeach
        </div>
    </div>
    

</x-layout>
