<x-layout title="Lista de Séries">
    <ul>
        @foreach($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
