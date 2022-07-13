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
                        <li><a href="/"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Professor
                        </li>
                        <li>
                            <a href="../disciplina/"><i class="fa fa-book fa-fw"></i> Disciplinas</a>
                            <a href="#" class="active"><i class="fa fa-superscript fa-fw"></i> Avaliações</a>
                            <a href="../falta/"><i class="fa fa-calendar fa-fw"></i> Faltas</a>
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
                            Listagem de avaliações
                            <a href="./adicionar" class="btn btn-primary pull-right">Adicionar avaliação</a>
                        </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    Item deletado com sucesso!
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Listagem (100 resultados)
                                    </div>
                                    <div class="panel-body">
                                        <div class="row search-bottom">
                                            <div class="col-md-4">
                                                <div class="input-group custom-search-form">
                                                    <input type="text" class="form-control" placeholder="Pesquisar...">
                                                    <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button">
                                                      <i class="fa fa-search"></i>
                                                  </button>
                                              </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Avaliação</th>
                                                    <th>Turma / Disciplina</th>
                                                    <th>Finalizado</th>
                                                    <th class="center">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($avaliacaos as $avaliacao)
                                                    <tr>
                                                        <td>{{$avaliacao->id}}</td>
                                                        <td>{{$avaliacao->name}}</td>
                                                        <td>{{  $avaliacao->turma->name }}
                                                            / {{$avaliacao->disciplina->name}}</td>
                                                        <td><span
                                                                class="label label-success">{{$avaliacao->ended ? 'Finalizado' : 'Ativo'}}</span>
                                                        </td>
                                                        <td align="center">
                                                            <a href="./avaliar/{{$avaliacao->id}}"
                                                               class="btn btn-success btn-circle"
                                                               data-toggle="tooltip" data-placement="bottom"
                                                               title="Avaliar"><i
                                                                    class="fa fa-check"></i></a>
                                                            <a href="/professor/avaliacao/editar/{{$avaliacao->id}}"
                                                               class="btn btn-info btn-circle"
                                                               data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="Editar">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="./deletar/{{$avaliacao->id}}"
                                                               class="btn btn-danger btn-circle"
                                                               data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="Deletar">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
        $('body table').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
    </script>
@endsection
