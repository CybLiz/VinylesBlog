<x-layout>
    <x-slot:heading>
        <h1>Bienvenue sur le Blog référence de Vinyles!</h1>
    </x-slot:heading>

    <div class="ml-10 mb-5 items-baseline space-x-3  flex flex-wrap">
        @foreach ($vinyles as $vinyle)
            <a href="/vinyles/{{ $vinyle['id'] }}">
                <img src="{{ $vinyle['img'] }}" alt="{{ $vinyle['name'] }}">
            </a>
        @endforeach


    </div>


</x-layout>
