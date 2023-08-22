<style>
    /* Estilos gerais */
    body {
        font-family: Arial, sans-serif;
    }

    /* Estilos do formulário */
    .form-container {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    /* Botões */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
    }

    .btn {
        margin-top: 10px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Filme</div>

                <div class="card-body">
                    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $movie->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="synopsis">Sinopse</label>
                            <textarea class="form-control" id="synopsis" name="synopsis" rows="5" required>{{ $movie->synopsis }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="year">Ano</label>
                                <input type="number" class="form-control" id="year" name="year" value="{{ $movie->year }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category">Categoria</label>
                                <input type="text" class="form-control" id="category" name="category" value="{{ $movie->category }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">URL da Imagem da Capa</label>
                            <input type="text" class="form-control" id="cover_image" name="cover_image" value="{{ $movie->cover_image }}" required>
                        </div>
                        <div class="form-group">
                            <label for="trailer_link">URL do Trailer no YouTube</label>
                            <input type="text" class="form-control" id="trailer_link" name="trailer_link" value="{{ $movie->trailer_link }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <a href="{{ route('movies.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>