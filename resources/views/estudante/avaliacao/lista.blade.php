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
                            Listagem de disciplinas
                        </h3>
                        <div class="row">
                            <div class="col-lg-12">
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
                                                    <th>Disciplina</th>
                                                    <th class="center">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Disciplina 1</td>
                                                    <td align="center"><a href="avaliacao.html"
                                                                          class="btn btn-success btn-circle"
                                                                          data-toggle="tooltip" data-placement="bottom"
                                                                          title="Abrir disciplina"><i
                                                                class="fa fa-book"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Disciplina 1</td>
                                                    <td align="center"><a href="avaliacao.html"
                                                                          class="btn btn-success btn-circle"
                                                                          data-toggle="tooltip" data-placement="bottom"
                                                                          title="Abrir disciplina"><i
                                                                class="fa fa-book"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Disciplina 1</td>
                                                    <td align="center"><a href="avaliacao.html"
                                                                          class="btn btn-success btn-circle"
                                                                          data-toggle="tooltip" data-placement="bottom"
                                                                          title="Abrir disciplina"><i
                                                                class="fa fa-book"></i></a></td>
                                                </tr>
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
