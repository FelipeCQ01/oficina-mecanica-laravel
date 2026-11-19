<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mecânicos</title>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">

        <h1>Equipe de Mecânicos - Oficina Mecânica</h1>

        <p>Bem-vindos à Oficina Mecânica!</p>

        <p>Total de mecânicos: {{ $mecanicos->count() }}</p>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Registro</th>
                    <th>Especialidade</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($mecanicos as $mecanico)
                    <tr>
                        <td>{{ $mecanico->id }}</td>
                        <td>{{ $mecanico->nome }}</td>
                        <td>{{ $mecanico->registro }}</td>
                        <td>{{ $mecanico->especialidade }}</td>
                        <td>{{ $mecanico->telefone }}</td>

                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('mecanicos.show', $mecanico->id) }}">
                            Visualizar
                            </a>

                            <a class="btn btn-warning btn-sm" href="{{ route('mecanicos.edit', $mecanico->id) }}">
                            Editar
                            </a>

                            <form action="{{ route('mecanicos.destroy', $mecanico->id) }}"
                                method="POST" class="d-inline"
                                onsubmit="return confirm('Confirma a exclusão?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                            Excluir
                            </button>
                            </form>

                        </td>
                        
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('mecanicos.create') }}" class="btn btn-primary mb-3">
            Novo Mecânico
        </a>    

    </div>
</body>
</html>