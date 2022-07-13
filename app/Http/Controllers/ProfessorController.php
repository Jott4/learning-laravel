<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    protected $error = false;

    public function login()
    {
        return view('professor.login', ["error" => $this->error]);
    }


    public function listaProfessor()
    {
        $professors = Professor::all();
        return view('adm.professor.lista', ['professors' => $professors]);
    }


    public function criaProfessor()
    {
        return view('adm.professor.adicionar');
    }

    public function storeProfessor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $professor = new Professor();
        $professor->name = $request->input('name');
        $professor->email = $request->input('email');
        $professor->password = Hash::make($request->input('password'));

        $professor->save();

        return redirect('/admin/professor/');
    }

    public function showProfessor($id)
    {
        $professor = Professor::findOrFail($id);
        return view('adm.professor.editar', ['professor' => $professor]);
    }

    public function updateProfessor(Request $request, $id)
    {
        $professor = Professor::find($id);

        $professor->name = $request->name;
        $professor->email = $request->email;
        $professor->password = Hash::make($request->password);

        $professor->save();
        return redirect('/admin/professor/');
    }

    public function deleteProfessor($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect('/admin/professor/')->with('msg', 'deleted');
    }
}
