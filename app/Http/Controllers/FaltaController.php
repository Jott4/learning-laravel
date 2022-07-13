<?php

namespace App\Http\Controllers;

use App\Models\Falta;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FaltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function professorIndex()
    {
        return view('professor.falta.lista');
    }

    public function alunoIndex()
    {
        return view('estudante.falta.lista');
    }


    public function chamada()
    {
        return view('professor.falta.chamada');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Falta $falta
     * @return Response
     */
    public function show(Falta $falta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Falta $falta
     * @return Response
     */
    public function edit(Falta $falta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Falta $falta
     * @return Response
     */
    public function update(Request $request, Falta $falta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Falta $falta
     * @return Response
     */
    public function destroy(Falta $falta)
    {
        //
    }
}
