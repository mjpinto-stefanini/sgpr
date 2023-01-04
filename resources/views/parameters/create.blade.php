@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Cadastrar Parâmetro</h1>

            <h3>Favor selecionar o parâmetro mãe para cadastro:</h3>

            <form>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Gerência</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Informação orçamentaria</label>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome do Paramêtro</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">
                </div>

                <select class="form-select" aria-label="Tipo">
                    <option selected>Tipo</option>
                    <option value="Alfanumérico">Alfanumérico</option>
                    <option value="Numérico">Numérico</option>
                    <option value="Data">Data</option>
                    <option value="Booleano">Booleano</option>

                </select>

                <div class="bd-example mt-3">

                    <button type="button" class="btn btn-success">Salvar</button>
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-secondary">Voltar</button>

                </div>
            </form>


        </div>


    </div>
@stop
