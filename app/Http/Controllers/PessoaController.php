<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $pessoas = Pessoa::orderBy('id')->get();

        return view('pessoa.index', ['pessoas' => $pessoas]);
    }

    public function completo()
    {

        $pessoas = Pessoa::orderBy('id')->get();

        return view('pessoa.completo', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PessoaRequest $request)
    {
        $request->validated();

        // dd($request->all());

        $pessoa = Pessoa::create($request->all());

        return redirect()->route('pessoa.index', ['pessoa' => $pessoa])->with('success', 'Pessoa criada com sucesso');
    }

    // Show the form for editing the specified resource.
    
    // public function edit(Pessoa $pessoa)
    // {
    //    
    // }

    // Update the specified resource in storage.
    
    // public function update(Request $request, Pessoa $pessoa)
    // {
        
    // }

    // Remove the specified resource from storage.

    public function destroy(Pessoa $pessoa){
        $pessoa->delete();

        return redirect()->route('pessoa.index')->with('success', 'Pessoa deletada com sucesso');
    }
}