<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Mecânicos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">

        <h1>Cadastro de Mecânicos</h1>

    <form action="{{ route('mecanicos.update', $mecanico->id) }}" 
        method="POST" novalidate>
        @csrf
        @method('PUT')

        <label for="nome">Nome</label>
        <input id="nome" name="nome" class="form-control"
            value="{{ old('nome', $mecanico->nome) }}">
        @error('nome')
        <div class="text-danger">{{ $message }}</div>
        @enderror

</br>

<!-- Campos preenchidos e botão Salvar -->
    <label for="registro">Registro</label>
    <input name="registro" class="form-control"
        value="{{ old('registro', $mecanico->registro) }}">
        @error('registro')
    <div class="text-danger">{{ $message }}</div>
        @enderror

</br>
    <label for="especialidade">Especialidade</label>
    <input name="especialidade" class="form-control"
            value="{{ old('especialidade', $mecanico->especialiadade) }}">
        @error('especialidade')
    <div class="text-danger">{{ $message }}</div>
        @enderror

</br>
    <label for="telefone">Telefone</label>
    <input id="nome" name="telefone" class="form-control"
            value="{{ old('telefone', $mecanico->telefone) }}">
        @error('telefone')
    <div class="text-danger">{{ $message }}</div>
        @enderror

</br></br>

    <button class="btn btn-primary">Salvar alterações</button>

    </form>

    </div>

</body>
</html>