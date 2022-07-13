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
                            Adicionar avaliação
                            <a href="lista" class="btn btn-default pull-right">Voltar</a>
                        </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <!--   <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  Os seguintes erros foram encontrados:
                                  <br>
                                  - Erro 1
                                </div>
                                -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Cadastro de novo aluno
                                    </div>
                                    <div class="panel-body">
                                        <form action="#" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nome da avaliação</label>
                                                        <input type="text" class="form-control" name="name"
                                                               placeholder="Nome da avaliação">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Data</label>
                                                        <input type="date" class="form-control" name="datestart"
                                                               placeholder="10/10/2017">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Turma</label>
                                                        <select class="form-control" name="turma_id">
                                                            @foreach($turmas as $turma)
                                                                <option value="{{$turma->id}}">{{$turma->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Disciplina</label>
                                                        <select class="form-control" name="disciplina_id">

                                                            @foreach($disciplinas as $disciplina)
                                                                <option
                                                                    value="{{$disciplina->id}}">{{$disciplina->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="submit" class="btn btn-primary" value="Salvar">
                                                    <a href="lista" class="btn btn-default">Cancelar</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
