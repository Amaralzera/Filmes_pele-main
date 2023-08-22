<style>

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .btn {
        padding: 5px 10px;
        font-size: 14px;
        text-decoration: none;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .img-thumbnail {
        max-width: 100px;
        height: auto;
    }
</style>

<div class="container">
    <h1>Filmes</h1>
    @can('user')  <a href="{{ route('movies.create') }}" class="btn btn-success">Adicionar Filme</a>@elsecan('admin')@endcan
    <table class="table">
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
                    <img src="{{ $movie->cover_image }}" alt="Capa do Filme" class="img-thumbnail">
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
</div>
