<?php

namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $profissionais = Profissional::all();
        return view('cadastros.listaprofissionais', ['profissionais'=>$profissionais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastros.cadastroprofissional');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Profissional::create($request->all());
        return ProfissionaisController::index();
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
        $profissional = Profissional::where('id', $id);
        dd($profissional);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profissional $profissional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profissional $profissional)
    {
        //
    }
}