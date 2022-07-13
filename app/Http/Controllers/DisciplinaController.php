<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function listaDisciplina()
    {
        $disciplinas = Disciplina::with('turma')->get();
        return view('adm.disciplina.lista', ['disciplinas' => $disciplinas]);
    }

    public function listaProfessorDisciplina()
    {
        $disciplinas = Disciplina::with('turma')->get();
        return view('professor.disciplina.lista', ['disciplinas' => $disciplinas]);
    }


    public function criaDisciplina()
    {
        $professors = Professor::all();
        $turmas = Turma::all();
        return view('adm.disciplina.adicionar', ['professors' => $professors, 'turmas' => $turmas]);
    }

    public function storeDisciplina(Request $request)
    {
        $disciplina = new Disciplina();
        $disciplina->name = $request->name;
        $disciplina->turma_id = $request->turma_id;
        $disciplina->professor_id = $request->professor_id;
        $disciplina->aulas_semana = $request->dias;

        $disciplina->save();

        return redirect('/admin/disciplina/');
    }

    public function showDisciplina($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $professors = Professor::all();
        $turmas = Turma::all();
        return view('adm.disciplina.editar', ['disciplina' => $disciplina, 'professors' => $professors, 'turmas' => $turmas]);
    }

    public function updateDisciplina(Request $request, $id)
    {
        $disciplina = Disciplina::find($id);

        $disciplina->name = $request->name;
        $disciplina->turma_id = $request->turma_id;
        $disciplina->professor_id = $request->professor_id;
        $disciplina->aulas_semana = $request->dias;

        $disciplina->save();
        return redirect('/admin/disciplina/');
    }

    public function deleteDisciplina($id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        return redirect('/admin/disciplina/')->with('msg', 'deleted');
    }
}
