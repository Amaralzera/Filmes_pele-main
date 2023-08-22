<!-- resources/views/movies/index.blade.php -->

<h1>Filmes</h1>
<a href="{{ route('movies.create') }}" class="btn btn-success">Adicionar Filme</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Categoria</th>
            <th>Capa</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->category }}</td>
                <td>
                    <img src="{{ $movie->cover_image }}" alt="Capa do Filme" style="max-width: 100px;">
                </td>
                <td>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o filme?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
