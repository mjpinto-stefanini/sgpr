@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Cadastrar Parâmetro de Gerência</h1>



            <form>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label">Unidade</label>

                            <select class="form-select" name="" aria-label="Unidade">
                                <option selected>Selecione a unidade</option>
                                @foreach($units as $unit)
                                    <option name="{{$unit->name}}" >{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="exampleInputEmail1" class="form-label">Cod. da unidade</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label for="exampleInputEmail1" class="form-label">Teto orçamentário</label>
                            <input type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                    </div>
                </div>

                <div class="mb-3 col-3">
                    <label for="exampleInputEmail1" class="form-label">UPG da Gerência</label>
                    <div class="form-group multiple-form-group input-group">
                        <div class="input-group-btn input-group-select">

                            <ul class="dropdown-menu" role="menu">

                                <li><a href="#"> ### </a></li>
                            </ul>
                        </div>
                        <input type="text" name="descricao[]" maxlength="45" id="descricao" class="form-control">
                        <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-add">+</button>
                                </span>
                    </div>

                </div>


                <div class="col-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nome da UPG</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>


                        <td>Mark</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </td>

                    </tr>


                    </tbody>
                </table>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>

                <div class="bd-example mt-3">

                    <button type="button" class="btn btn-success">Salvar</button>
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-secondary">Voltar</button>

                </div>
            </form>


        </div>
    </div>



@stop
