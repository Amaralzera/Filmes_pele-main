
<style>
    /* Estilos gerais */
    body {
        font-family: Arial, sans-serif;
        background-color: #000;
        color: #fff;
    }

    /* Estilos do formulário */
    .form-container {
        padding: 20px;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.1);
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    /* Botões */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 18px;
        padding: 10px 20px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
        font-size: 18px;
        padding: 10px 20px;
    }

    .btn-secondary:hover {
        background-color: #5a6167;
        border-color: #5a6167;
    }

    .btn {
        margin-top: 20px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Filme</div>

                <div class="card-body">
                    <form action="{{ route('movies.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="synopsis">Sinopse</label>
                            <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="year">Ano</label>
                                <input type="number" class="form-control" id="year" name="year" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category">Categoria</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">URL da Imagem da Capa</label>
                            <input type="text" class="form-control" id="cover_image" name="cover_image" required>
                        </div>
                        <div class="form-group">
                            <label for="trailer_link">URL do Trailer no YouTube</label>
                            <input type="text" class="form-control" id="trailer_link" name="trailer_link" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                        <a href="{{ route('movies.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

