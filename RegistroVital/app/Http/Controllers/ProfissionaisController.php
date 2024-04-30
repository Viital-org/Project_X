<?php

namespace App\Http\Controllers;

use App\Models\AtuaArea;
use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profissionais = Profissional::leftJoin('atuaareas', 'profissionais.areaatuacao_id', '=', 'atuaareas.id')
            ->select('profissionais.*', 'atuaareas.area')
            ->orderBy('profissionais.created_at')
            ->get();
        return view('Cadastros/listaprofissionais', ['profissionais' => $profissionais]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Profissional::create($request->all());
        return redirect()->route('profissionais-index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $atuaareas = AtuaArea::all();
        return view('Cadastros/cadastroprofissional', ['atuaareas' => $atuaareas]);
    }

    /*
     * Display the specified resource.
     */

    public function show(Profissional $profissional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profissional = Profissional::find($id);
        $atuaareas = AtuaArea::all();
        return view('Cadastros/editarprofissional', ['profissionais' => $profissional, 'atuaareas' => $atuaareas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profissional = Profissional::findorfail($id);
        $profissional->update($request->all());
        return redirect()->route('profissionais-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        {
            $profissional = Profissional::findorfail($id);
            $profissional->delete();
            return redirect()->route('profissionais-index');
        }
    }
}
