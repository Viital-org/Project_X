<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Profissional;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Consulta::all();
        return view('Cadastros/listaconsultas', compact('consultas'), ['consultas' => $consultas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Consulta::create($request->all());
        return redirect()->route('consultas-index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $profissionais = Profissional::all();
        $pacientes = Paciente::all();

        return view('Cadastros/cadastroconsultas', ['profissionais' => $profissionais, 'pacientes' => $pacientes]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $consulta = Consulta::find($id);
        $profissionais = Profissional::all();
        $pacientes = Paciente::all();
        return view('Cadastros/editarconsulta', ['consultas' => $consulta, 'profissionais' => $profissionais, 'pacientes' => $pacientes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $consulta = Consulta::findorfail($id);
        $consulta->update($request->all());
        return redirect()->route('consultas-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $consulta = Consulta::findorfail($id);
        $consulta->delete();
        return redirect()->route('consultas-index');
    }
}