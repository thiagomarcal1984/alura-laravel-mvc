<x-layout title="Lista de Séries">
    <a class="btn btn-dark mb-2" href="/series/criar">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>
