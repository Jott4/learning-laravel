<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Disciplina;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function professorIndex()
    {
        $avaliacaos = Avaliacao::with('turma')->with('disciplina')->get();
        return view('professor.avaliacao.lista', ['avaliacaos' => $avaliacaos]);
    }

    public function alunoIndex()
    {
        $avaliacaos = Avaliacao::all();
        return view('estudante.avaliacao.lista', ['avaliacaos' => $avaliacaos]);
    }


    public function professorAvaliate()
    {
        $avaliacaos = Avaliacao::all();
        return view('professor.avaliacao.avaliar', ['avaliacaos' => $avaliacaos]);
    }

    public function alunoAvaliate()
    {
        $avaliacaos = Avaliacao::all();
        return view('estudante.avaliacao.avaliacao', ['avaliacaos' => $avaliacaos]);
    }


    public function create()
    {
        $turmas = Turma::all();
        $disciplinas = Disciplina::all();
        return view('professor.avaliacao.adicionar', ['turmas' => $turmas, 'disciplinas' => $disciplinas]);
    }

    public function store(Request $request)
    {
        $avaliacao = new Avaliacao();

        $avaliacao->name = $request->name;
        $avaliacao->data_inicio = $request->datestart;
        $avaliacao->turma_id = $request->turma_id;
        $avaliacao->disciplina_id = $request->disciplina_id;

        $avaliacao->save();

        return redirect('/professor/avaliacao');
    }


    /**
     * Display the specified resource.
     *
     * @param Avaliacao $avaliacao
     * @return Response
     */
    public function show($id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $turmas = Turma::all();
        $disciplinas = Disciplina::all();
        return view('professor.avaliacao.editar', ['avaliacao' => $avaliacao, 'turmas' => $turmas, 'disciplinas' => $disciplinas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Avaliacao $avaliacao
     * @return Response
     */
    public function edit(Request $request, $id)
    {

        $avaliacao = Avaliacao::find($id);

        $avaliacao->name = $request->name;
        $avaliacao->data_inicio = $request->datestart;
        $avaliacao->turma_id = $request->turma_id;
        $avaliacao->disciplina_id = $request->disciplina_id;

        $avaliacao->save();

        return redirect('/professor/avaliacao');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Avaliacao $avaliacao
     * @return Response
     */
    public function update(Request $request, Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Avaliacao $avaliacao
     * @return Response
     */
    public function destroy(Avaliacao $avaliacao)
    {
        //
    }
}
