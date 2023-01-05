<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('resources/css/app.css') }}">

    @vite('resources/js/app.js')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <p class="titulo-site">
                    <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a> Sistema de Gestão de Pagamentos e Recebimentos
                </p>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                        <img src="{{ asset('images/logo-hemominas-cabecalho.png') }}" alt="{{ config('app.name', 'Laravel') }}">

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->




        <main class="py-4">
            @yield('content')
        </main>


            <footer class="text-white text-center text-lg-start" style="     position: unset;  border-top: 1px solid #333; bottom: 0; left: 0;  width: 100%;">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row mt-4">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                            <img src="{{ asset('images/logo-hemominas-rodape.png') }}" alt="{{ config('app.name', 'Laravel') }}">



                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                            <p>FUNDAÇÃO HEMOMINAS</p>
                            <p>Administração Central</p>
                            <p>Rua Grão Pará , 882 - Funcionários</p>
                            <p>CEP: 30150-341</p>
                            <p>Telefones de contato: (31) 3768 7450</p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 ml-3">
                           <p class="text-lg-end"> <a target="_blank" href="http://www.hemominas.mg.gov.br/aviso-de-privacidade">Aviso de Privacidade</a></p>
                            <p class="text-lg-end"><a target="_blank" href="http://www.hemominas.mg.gov.br/protecao-de-dados">Proteção de Dados</a></p>

                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center copyright p-3" >
                    © 2022 Hemominas:
                    <a class="text-white" href="http://www.hemominas.mg.gov.br/"></a>Desenvolvido pela STEFANINI<a class="text-white" href="https://stefanini.com/pt-br/"></a>
                </div>
                <!-- Copyright -->
            </footer>


    </div>

</body>


</html>
