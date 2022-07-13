@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="starter-template">
                <h1>Sistema de gerenciamento - SENAI</h1>
                <p class="lead">O sistema utilizado por todas as unidades do senai em todo o Brasil,<br>utilizada por
                    mais de 5.000.000 de alunos.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administrador</h3>
                    </div>
                    <div class="panel-body">
                        <p>Acesse a aplicação como adminsitrador.</p>
                        <a href="/admin" class="btn btn-primary">Sou administrador</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Professor</h3>
                    </div>
                    <div class="panel-body">
                        <p>Acesse a aplicação como professor.</p>
                        <a href="/professor" class="btn btn-primary">Sou professor</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Aluno</h3>
                    </div>
                    <div class="panel-body">
                        <p>Acesse a aplicação como aluno.</p>
                        <a href="/aluno" class="btn btn-primary">Sou aluno</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
