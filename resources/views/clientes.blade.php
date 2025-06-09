@foreach ($clientes as $cliente)
    <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}">{{ $cliente->species }}</a>
    <form action="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Apagar" />
    </form>
@endforeach

<a href="{{ route('clientes.create') }}">Adicionar Novo</a>