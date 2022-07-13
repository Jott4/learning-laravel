<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{

    public function listaTurma()
    {
        $turmas = Turma::with('curso')->get();
        return view('adm.turma.lista', ['turmas' => $turmas]);
    }

    public function criaTurma()
    {
        $cursos = Curso::all();
        return view('adm.turma.adicionar', ['cursos' => $cursos]);
    }

    public function storeTurma(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'curso_id' => 'required'
        ]);

        $turma = new Turma();
        $turma->name = $request->input('name');
        $turma->curso_id = $request->input('curso_id');

        $turma->save();

        return redirect('/admin/turma/');
    }

    public function showTurma($id)
    {
        $turma = Turma::findOrFail($id);
        $cursos = Curso::all();
        return view('adm.turma.editar', ['turma' => $turma, 'cursos' => $cursos]);
    }

    public function updateTurma(Request $request, $id)
    {
        $turma = Turma::find($id);

        $turma->name = $request->name;
        $turma->curso_id = $request->curso_id;

        $turma->save();
        return redirect('/admin/turma/');
    }

    public function deleteTurma($id)
    {
        $turma = Turma::find($id);
        $turma->delete();

        return redirect('/admin/turma/')->with('msg', 'deleted');
    }
}
