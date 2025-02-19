<x-layout>
    <x-slot:heading>
        <h1>Bienvenue sur le Blog référence de Vinyles!</h1>
    </x-slot:heading>

    {{-- <div class="ml-10 mb-5 items-baseline space-x-3  flex flex-wrap"> --}}
    {{-- @foreach ($vinyles as $vinyle) --}}
    {{-- <div  class="flex flex-col items-center">
                <a href="/vinyles/{{ $vinyle['id'] }}">
                    <img src="{{ $vinyle['img'] }}" alt="{{ $vinyle['name'] }}">
                </a>
                <p>{{ $vinyle['name'] }}</p>
            </div> --}}
    {{-- <x-vinyles-card :vinyle ="$vinyles"/> 

        @endforeach --}}


    {{-- </div> --}}


    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="bg-white">

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($vinyles as $vinyle)
                    {{-- <x-vinyles-card :vinyle="$vinyle" /> --}}

                    <x-vinyles-card :vinyle="$vinyle" :artist="$vinyle->artist" />
                @endforeach
            </div>
        </div>
    </div>
    <div>
        {{ $vinyles->links() }}
    </div>



</x-layout>
