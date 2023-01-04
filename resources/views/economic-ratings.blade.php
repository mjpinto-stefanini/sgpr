<!DOCTYPE html>
<html>
<head>
    <title>SGPR - Importação de unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            SGPR - Importação de Classificações Econômicas
        </div>
        <div class="card-body">
            <form action="{{ route('economicratings.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Importar</button>
            </form>

            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        Lista de Classificações Econômicas
                        <a class="btn btn-warning float-end" href="{{ route('economicratings.export') }}">Exportar Classificações Econômicas</a>
                    </th>
                </tr>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                </tr>
                @foreach($economicratings as $economicrating)
                    <tr>

                        <td>{{ $economicrating->title }}</td>
                        <td>{{ $economicrating->description }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
