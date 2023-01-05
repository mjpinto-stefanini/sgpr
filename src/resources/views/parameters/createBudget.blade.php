@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Cadastrar Parâmetro de Informações Orçamentarias</h1>



            <form>
                <div class="col-3">
                    <p>Tipo de despesas</p>
                    <select class="form-select" name="" aria-label="Tipo de despesas">
                        <option name="" >Selecione</option>
                        @foreach($expenses as $expense)
                            <option name="{{$expense->title}}" >{{$expense->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mt-4">
                    <table class="table table-striped ">
                        <thead class="table-success">
                        <tr>

                            <th scope="col"> Classificação Ecônomica</th>
                            <th scope="col">Fonte</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr >

                            <td>
                                @foreach($economics as $economic)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$economic->title}}
                                        </label>

                                    </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach($sources as $source)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">


                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$source->title}}
                                        </label>
                                    </div>
                                @endforeach
                            </td>

                        </tr>


                        </tbody>
                    </table>
                </div>

                <!--
            <p>Classificação Ecônomica</p>
            <select class="form-select" name="" aria-label="Unidade">
                @foreach($economics as $economic)
                    <option name="{{$economic->title}}" >{{$economic->title}}</option>
                @endforeach
                </select>
                <p>Fonte:</p>
                <select class="form-select" name="" aria-label="Fontes">
@foreach($sources as $source)
                    <option name="{{$source->title}}" >{{$source->title}}</option>
                @endforeach
                </select>
-->




                <div class="">
                    <p>Obrigatório?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Não</label>
                    </div>

                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Ativo?</label>
                </div>

                <div class="bd-example mt-3">

                    <button type="button" type="submit" class="btn btn-success">Salvar</button>
                    <button type="button" class="btn btn-secondary">Limpar</button>
                    <button type="button" class="btn btn-secondary">Voltar</button>

                </div>
            </form>

        </div>


    </div>
@stop
