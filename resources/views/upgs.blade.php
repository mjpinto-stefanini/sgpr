<!DOCTYPE html>
<html>
<head>
    <title>SGPR - Importação de UPGS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            SGPR - Importação de UPGS
        </div>
        <div class="card-body">
            <form action="{{ route('upgs.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Importar</button>
            </form>

            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                       Lista de UPGS
                        <a class="btn btn-warning float-end" href="{{ route('upgs.export') }}">Exportar UPGS</a>
                    </th>
                </tr>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>upg</th>
                </tr>
                @foreach($upgs as $upg)
                    <tr>
                        <td>{{ $upg->cost_center_cod }}</td>
                        <td>{{ $upg->description }}</td>
                        <td>{{ $upg->upg }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
