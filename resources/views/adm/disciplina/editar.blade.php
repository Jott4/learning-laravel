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
                            Administrador
                        </li>
                        <li>
                            <a href="../curso/"><i class="fa fa-mortar-board fa-fw"></i> Cursos</a>
                            <a href="../turma/"><i class="fa fa-group fa-fw"></i> Turmas</a>
                            <a href="../professor/"><i class="fa fa-male fa-fw"></i> Professores</a>
                            <a href="#" class="active"><i class="fa fa-book fa-fw"></i> Disciplinas</a>
                            <a href="../aluno/"><i class="fa fa-child fa-fw"></i> Alunos</a>
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
                            Editar disciplina
                            <a href="./" class="btn btn-default pull-right">Voltar</a>
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
                                        Editar disciplina cadastrada
                                    </div>
                                    <div class="panel-body">
                                        <form action="#" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nome da disciplina</label>
                                                        <input type="text" class="form-control" name="name"
                                                               value="{{$disciplina->name}}"
                                                               placeholder="Ex: Banco de dados">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Turma</label>
                                                        <select class="form-control" name="turma_id">
                                                            @foreach($turmas as $turma)
                                                                <option
                                                                    {{$disciplina->turma_id == $turma->id ? 'selected' : ''}} value="{{$turma->id}}">{{$turma->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Professor</label>
                                                        <select class="form-control" name="professor_id">

                                                            @foreach($professors as $professor)
                                                                <option
                                                                    {{$disciplina->professor_id == $professor->id ? 'selected' : ''}} value="{{$professor->id}}">{{$professor->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Aulas na semana</label>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="dias[]" type="checkbox"

                                                                       {{in_array('Segunda-feira', $disciplina->aulas_semana) ? 'checked' : ''}}
                                                                       value="Segunda-feira">Segunda-feira

                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"
                                                                       {{in_array('Terça-feira', $disciplina->aulas_semana) ? 'checked' : ''}}
                                                                       value="Terça-feira" checked
                                                                       name="dias[]">Terça-feira
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"
                                                                       {{in_array('Quarta-feira', $disciplina->aulas_semana) ? 'checked' : ''}}
                                                                       value="Quarta-feira" name="dias[]">Quarta-feira
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"
                                                                       {{in_array('Quinta-feira', $disciplina->aulas_semana) ? 'checked' : ''}}
                                                                       value="Quinta-feira"
                                                                       name="dias[]">Quinta-feira
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"
                                                                       {{in_array('Sexta-feira', $disciplina->aulas_semana) ? 'checked' : ''}}
                                                                       value="Sexta-feira"
                                                                       name="dias[]">Sexta-feira
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="submit" class="btn btn-primary" value="Salvar">
                                                    <a href="./" class="btn btn-default">Cancelar</a>
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
