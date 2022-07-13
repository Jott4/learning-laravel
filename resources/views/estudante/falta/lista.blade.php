@extends('layouts.main')

@section('content')

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Sistema de gerenciamento</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Aluno
                        </li>
                        <li>
                            <a href="../avaliacao/"><i class="fa fa-superscript fa-fw"></i> Avaliações</a>
                            <a href="#" class="active"><i class="fa fa-calendar fa-fw"></i> Faltas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Listagem de disciplinas
                        </h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Disciplina 1
                                    </div>
                                    <div class="panel-body">
                                        <p><b>Total de aulas:</b> 40</p>
                                        <p><b>Total de faltas:</b> 10</p>
                                        <p><a href="#" class="btn btn-danger btn-circle" data-toggle="tooltip"
                                              data-placement="bottom" title="Gerar relatório PDF"><i
                                                    class="fa fa-file-pdf-o"></i></a> <a href="#"
                                                                                         class="btn btn-success btn-circle"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="bottom"
                                                                                         title="Gerar relatório Excel"><i
                                                    class="fa fa-file-excel-o"></i></a> <a href="#"
                                                                                           class="btn btn-info btn-circle"
                                                                                           data-toggle="tooltip"
                                                                                           data-placement="bottom"
                                                                                           title="Gerar relatórios e comprimir"><i
                                                    class="fa fa-file-zip-o"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Disciplina 1
                                    </div>
                                    <div class="panel-body">
                                        <p><b>Total de aulas:</b> 40</p>
                                        <p><b>Total de faltas:</b> 10</p>
                                        <p><a href="#" class="btn btn-danger btn-circle" data-toggle="tooltip"
                                              data-placement="bottom" title="Gerar relatório PDF"><i
                                                    class="fa fa-file-pdf-o"></i></a> <a href="#"
                                                                                         class="btn btn-success btn-circle"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="bottom"
                                                                                         title="Gerar relatório Excel"><i
                                                    class="fa fa-file-excel-o"></i></a> <a href="#"
                                                                                           class="btn btn-info btn-circle"
                                                                                           data-toggle="tooltip"
                                                                                           data-placement="bottom"
                                                                                           title="Gerar relatórios e comprimir"><i
                                                    class="fa fa-file-zip-o"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Disciplina 1
                                    </div>
                                    <div class="panel-body">
                                        <p><b>Total de aulas:</b> 40</p>
                                        <p><b>Total de faltas:</b> 10</p>
                                        <p><a href="#" class="btn btn-danger btn-circle" data-toggle="tooltip"
                                              data-placement="bottom" title="Gerar relatório PDF"><i
                                                    class="fa fa-file-pdf-o"></i></a> <a href="#"
                                                                                         class="btn btn-success btn-circle"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="bottom"
                                                                                         title="Gerar relatório Excel"><i
                                                    class="fa fa-file-excel-o"></i></a> <a href="#"
                                                                                           class="btn btn-info btn-circle"
                                                                                           data-toggle="tooltip"
                                                                                           data-placement="bottom"
                                                                                           title="Gerar relatórios e comprimir"><i
                                                    class="fa fa-file-zip-o"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('body .row').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
    </script>
@endsection
