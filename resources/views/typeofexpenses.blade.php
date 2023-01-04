<!DOCTYPE html>
<html>
<head>
    <title>SGPR - Importação de Tipo de Despesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            SGPR - Importação de Tipo de Despesas
        </div>
        <div class="card-body">
            <form action="{{ route('typeofexpenses.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Importar</button>
            </form>

            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                       Lista de Tipo de Despesas
                        <a class="btn btn-warning float-end" href="{{ route('typeofexpenses.export') }}">Exportar Tipo de Despesas</a>
                    </th>
                </tr>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                </tr>
                @foreach($typeofexpenses as $typeofexpense)
                    <tr>
                        <td>{{ $typeofexpense->title }}</td>
                        <td>{{ $typeofexpense->description }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
