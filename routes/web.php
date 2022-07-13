<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [AdminController::class, 'login']);

Route::get('/admin/curso', [CursoController::class, 'listaCurso']);
Route::get('/admin/curso/adicionar', [CursoController::class, 'criaCurso']);
Route::post('/admin/curso/adicionar', [CursoController::class, 'storeCurso']);
Route::post('/admin/curso/{id}', [CursoController::class, 'updateCurso']);
Route::get('/admin/curso/{id}', [CursoController::class, 'showCurso']);
Route::get('/admin/curso/delete/{id}', [CursoController::class, 'deleteCurso']);


Route::get('/admin/turma', [TurmaController::class, 'listaTurma']);
Route::get('/admin/turma/adicionar', [TurmaController::class, 'criaTurma']);
Route::post('/admin/turma/adicionar', [TurmaController::class, 'storeTurma']);
Route::post('/admin/turma/{id}', [TurmaController::class, 'updateTurma']);
Route::get('/admin/turma/{id}', [TurmaController::class, 'showTurma']);
Route::get('/admin/turma/delete/{id}', [TurmaController::class, 'deleteTurma']);


Route::get('/admin/professor', [ProfessorController::class, 'listaProfessor']);
Route::get('/admin/professor/adicionar', [ProfessorController::class, 'criaProfessor']);
Route::post('/admin/professor/adicionar', [ProfessorController::class, 'storeProfessor']);
Route::post('/admin/professor/{id}', [ProfessorController::class, 'updateProfessor']);
Route::get('/admin/professor/{id}', [ProfessorController::class, 'showProfessor']);
Route::get('/admin/professor/delete/{id}', [ProfessorController::class, 'deleteProfessor']);


Route::get('/admin/disciplina', [DisciplinaController::class, 'listaDisciplina']);
Route::get('/admin/disciplina/adicionar', [DisciplinaController::class, 'criaDisciplina']);
Route::post('/admin/disciplina/adicionar', [DisciplinaController::class, 'storeDisciplina']);
Route::post('/admin/disciplina/{id}', [DisciplinaController::class, 'updateDisciplina']);
Route::get('/admin/disciplina/{id}', [DisciplinaController::class, 'showDisciplina']);
Route::get('/admin/disciplina/delete/{id}', [DisciplinaController::class, 'deleteDisciplina']);


Route::get('/admin/aluno', [AlunoController::class, 'listaAluno']);
Route::get('/admin/aluno/adicionar', [AlunoController::class, 'criaAluno']);
Route::post('/admin/aluno/adicionar', [AlunoController::class, 'storeAluno']);
Route::post('/admin/aluno/{id}', [AlunoController::class, 'updateAluno']);
Route::get('/admin/aluno/{id}', [AlunoController::class, 'showAluno']);
Route::get('/admin/aluno/delete/{id}', [AlunoController::class, 'deleteAluno']);


Route::get('/professor', [ProfessorController::class, 'login']);

Route::get('/professor/disciplina', [DisciplinaController::class, 'listaProfessorDisciplina']);
Route::get('/professor/avaliacao', [AvaliacaoController::class, 'professorIndex']);
Route::get('/professor/avaliacao/avaliar/{id}', [AvaliacaoController::class, 'professorAvaliate']);
Route::get('/professor/avaliacao/editar/{id}', [AvaliacaoController::class, 'show']);
Route::get('/professor/avaliacao/adicionar', [AvaliacaoController::class, 'create']);
Route::post('/professor/avaliacao/adicionar', [AvaliacaoController::class, 'store']);

Route::get('/professor/falta', [FaltaController::class, 'professorIndex']);
Route::get('/professor/falta/chamada', [FaltaController::class, 'chamada']);


Route::get('/aluno', [AlunoController::class, 'login']);
Route::get('/aluno/falta', [AvaliacaoController::class, 'alunosIndex']);
Route::get('/aluno/avaliacao', [AvaliacaoController::class, 'alunoIndex']);
Route::get('/aluno/avaliacao/avaliar', [AvaliacaoController::class, 'alunoAvaliate']);
Route::get('/aluno/falta', [FaltaController::class, 'alunoIndex']);

