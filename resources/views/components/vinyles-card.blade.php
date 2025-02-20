@props(['vinyle'])
@props(['artist'])



<div class="group relative">
    
    <a href="/vinyles/{{ $vinyle['id'] }}">
        <img src="{{ $vinyle['img'] }}" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
    </a>
    <div class="mt-4 flex justify-between">
        <div>
            <p class="mt-1 text-sm text-gray-500"> {{ $vinyle['title'] }}</p>
        </div>
        {{-- eager loading --}}
        <p class="text-sm font-medium text-gray-900"> {{ $artist['artist'] }}</p>

        {{-- lazy loading --}}
        {{-- <p class="text-sm font-medium text-gray-900"> {{ $vinyle->artist->author}}</p> --}}

    </div>
</div>
