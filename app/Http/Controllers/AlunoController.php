<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlunoController extends Controller
{
    public function login()
    {
        return view('estudante.login');
    }

    public function listaAluno()
    {
        $alunos = Aluno::all();

        return view('adm.aluno.lista', ['alunos' => $alunos]);
    }


    public function criaAluno()
    {
        $turmas = Turma::all();
        return view('adm.aluno.adicionar', ['turmas' => $turmas]);
    }

    public function storeAluno(Request $request)
    {

        $aluno = new Aluno();
        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->phone = $request->phone;
        $aluno->turma_id = $request->turma_id;
        $aluno->password = Hash::make($request->password);

        $aluno->save();

        return redirect('/admin/aluno/');
    }

    public function showAluno($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('adm.aluno.editar', ['aluno' => $aluno]);
    }

    public function updateAluno(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->password = Hash::make($request->password);

        $aluno->save();
        return redirect('/admin/aluno/');
    }

    public function deleteAluno($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();

        return redirect('/admin/aluno/')->with('msg', 'deleted');
    }
}
