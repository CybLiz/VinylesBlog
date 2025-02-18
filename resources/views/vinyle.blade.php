<x-layout>
    <x-slot:heading>
        <h1> Nom du Vinyle ici!</h1>
    </x-slot:heading>

    <img src="{{ $vinyle['img'] }}" alt="{{ $vinyle['name'] }}">
    <p>
        Nom : {{ $vinyle['name'] }}
    </p>
    <p>
        Autheur : {{ $vinyle['author'] }}
    </p>
    
</x-layout>