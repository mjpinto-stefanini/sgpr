@extends('layouts.app')


@section('content')




<div class="container">
    <div class="row">
        <form action="" method="post">
            <div id="step_1" class="step">
                <div  class="cadastrar-novo">
                    <div class="col-md-5">
                        <h3>Cadastrar Parâmetro de Despesas</h3>
                        <span>Ano:</span>
                        <select class="form-select" name="year" aria-label="selecione o ano">
                            <option selected>Selecione o ano</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div  class="mt-5">

                        <div class="bd-example">

                            <button type="button"  class="btn btn-success next">Novo</button>
                            <button type="button" id="btn-mostrar-gerencia" class="btn btn-secondary">Parâmetros Gerência</button>
                            <button type="button" class="btn btn-secondary">Parâmetros de Informações Orçamentárias</button>
                            <button type="button" class="btn btn-secondary">Pesquisar Parâmetro </button>
                            <button type='reset' class="btn btn-secondary">Limpar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step_2" class="step">
                <div  class="cadastrar-parametros">
                    <h3>Cadastrar Parâmetro</h3>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Gerência</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Informação orçamentaria</label>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do Paramêtro</label>
                        <input type="text" class="form-control" name="budget_ceilling" id="exampleInputEmail1">
                    </div>

                    <select class="form-select" aria-label="Tipo">
                        <option name="type_parameters" selected>Tipo</option>
                        <option value="Alfanumérico">Alfanumérico</option>
                        <option value="Numérico">Numérico</option>
                        <option value="Data">Data</option>
                        <option value="Booleano">Booleano</option>

                    </select>

                    <div class="bd-example mt-3">

                        <button type="button"  class="btn btn-success next">Salvar</button>
                        <button type='reset' class="btn btn-secondary">Limpar</button>
                        <button type="button" class="btn btn-secondary prev">Voltar</button>

                    </div>
                </div>
            </div>
            <div id="step_3" class="step">
                <div   class="cadastrar-parametros-gerencia">
                    <div class="row mb-4">
                        <h3>Cadastrar Parâmetro de Gerência</h3>
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



                                    <input type="text" value="" class="form-control" name="" id="exampleInputEmail1">


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
                         {{--   <tr>


                                <td>Mark</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div>
                                </td>

                            </tr>--}}


                            </tbody>
                        </table>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                    </div>

                    <div class="bd-example mt-3">

                        <button type="button" class="btn btn-success next">Salvar</button>
                        <button type='reset' class="btn btn-secondary">Limpar</button>
                        <button type="button" class="btn btn-secondary prev">Voltar</button>

                    </div>
                </div>
            </div>

            <div id="step_4" class="step">
                <div  class="cadastrar-parametros-gerencia">
                    <h3>Cadastrar Parâmetro de Informações Orçamentarias</h3>
                    <div class="col-3">
                        <p>Tipo de despesas</p>
                        <select class="form-select" name="type_of_expenses_id" aria-label="Tipo de despesas">
                            <option name="" >Selecione</option>
                            @foreach($despesas as $expense)
                                <option name="{{$expense->title}}" >{{$expense->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 mt-4">
                        <table class="table table-striped " >
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
                                            <input class="form-check-input" name="economic_ratings_id" type="checkbox" value="" id="flexCheckDefault">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$economic->title}}
                                            </label>

                                        </div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sources as $source)
                                        <div class="form-check">
                                            <input class="form-check-input"  name="sources_id" type="checkbox" value="" id="flexCheckDefault">


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

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Ativo?</label>
                    </div>

                    <div class="bd-example mt-3">

                        <button type="button"  type="submit" class="btn btn-success">Salvar</button>
                        <button type='reset' class="btn btn-secondary">Limpar</button>
                        <button type="button" class="btn btn-secondary prev">Voltar</button>

                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).ready(function(){



        //Esconde todos os passos e exibe o primeiro ao carregar a página
        $('.step').hide();
        $('.step').first().show();

        //Exibe no topo em qual passo estamos pela ordem da div que esta visivel
        var passoexibido = function(){
            var index = parseInt($(".step:visible").index());
            if(index == 0){
                //Se for o primeiro passo desabilita o botão de voltar
                $(".prev").prop('disabled',true);
            }else if(index == (parseInt($(".step").length)-1)){
                //Se for o ultimo passo desabilita o botão de avançar
                $(".next").prop('disabled',true);
            }else{
                //Em outras situações os dois serão habilitados
                $(".next").prop('disabled',false);
                $(".prev").prop('disabled',false);
            }
            $("#passo").html(index + 1);

        };

        //Executa a função ao carregar a página
        passoexibido();

        //avança para o próximo passo
        $(".next").click(function(){
            $(".step:visible").hide().next().show();
            passoexibido();
        });

        //retrocede para o passo anterior
        $(".prev").click(function(){
            $(".step:visible").hide().prev().show();
            passoexibido();
        });

    });
</script>

<script>
    (function ($) {
        $(function () {

            var addFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                var $formGroupClone = $formGroup.clone();

                $(this)
                    .toggleClass('btn-success btn-add btn-danger btn-remove')
                    .html('–');

                $formGroupClone.find('input').val('');
                $formGroupClone.find('.concept_sistema').text('Sistema');
                $formGroupClone.find('.concept').text('Estado');
                $formGroupClone.insertAfter($formGroup);

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', true);
                }
            };

            var removeFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', false);
                }

                $formGroup.remove();
            };

            var countFormGroup = function ($form) {
                return $form.find('.form-group').length;
            };

            $(document).on('click', '.btn-add', addFormGroup);
            $(document).on('click', '.btn-remove', removeFormGroup);

        });
    })(jQuery);



</script>

@stop

