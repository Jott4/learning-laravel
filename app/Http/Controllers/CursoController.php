<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listaCurso()
    {
        $cursos = Curso::all();
        return view('adm.curso.lista', ['cursos' => $cursos]);
    }


    public function criaCurso()
    {
        return view('adm.curso.adicionar');
    }

    public function storeCurso(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'area' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->input('name');
        $curso->area = $request->input('area');

        $curso->save();

        return redirect('/admin/curso/');
    }

    public function showCurso($id)
    {
        $curso = Curso::findOrFail($id);
        return view('adm.curso.editar', ['curso' => $curso, 'areas' => array("Tecnologia da informação", "tecnologia da moda", "Automação industrial", "Metal Mecânica", "Biotecnologia", "eletromecãnica")]);
    }

    public function updateCurso(Request $request, $id)
    {
        $curso = Curso::find($id);

        $curso->name = $request->name;
        $curso->area = $request->area;

        $curso->save();
        return redirect('/admin/curso/');
    }

    public function deleteCurso($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return redirect('/admin/curso/')->with('msg', 'deleted');
    }
}
