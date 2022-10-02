<x-layout title="Exemplo">
    <h2>Exemplo de JSON</h2>
    <p>{{ $frutas }}</p>
    <h2>Saída da variável $alerta <u>sem</u> o arroba</h2>
    <p>
        {{ $alerta }}
        <button onclick="{{ $alerta }}">Clique aqui.</button>
    </p>
    <small>
        Conteúdo escrito no atributo onclick do botão: javascript:alert(&#38;#039;Você clicou no botão.&#38;#039;).
        <br>
        O JavaScript funciona.
    </small>
    <h2>Saída da variável $alerta <u>com</u> o arroba</h2>
    <p>
        @{{ $alerta }}: 
        <button onclick="@{{ $alerta }}">Clique aqui.</button>
    </p>
    <small>
        Conteúdo escrito no atributo onclick do botão: @{{ $alerta }}.
        <br>
        O JavaScript não funciona.
    </small>
</x-layout>
