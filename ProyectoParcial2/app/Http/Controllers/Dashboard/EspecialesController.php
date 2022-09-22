<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEspecialPost;
use App\Models\Especial;
use Illuminate\Http\Request;

class EspecialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especiales=Especial::orderBy('created_at','asc') -> cursorpaginate(3);
        echo view('dashboard.especial.index',['especiales'=>$especiales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('dashboard.especial.create',["especial"=>new Especial()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEspecialPost $request)
    {
        Especial::create($request->validated());
        return back()->with('status','Medicamento Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especial  $especial
     * @return \Illuminate\Http\Response
     */
    public function show(Especial $especial)
    {
        echo view('dashboard.especial.show', ["especial"=>$especial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especial  $especial
     * @return \Illuminate\Http\Response
     */
    public function edit(Especial $especial)
    {
        echo view('dashboard.especial.edit', ["especial"=>$especial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especial  $especial
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEspecialPost $request, Especial $especial)
    {
        $especial->update($request->validated());
        return back()->with('status','Medicamento especial Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especial  $especial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especial $especial)
    {
        $especial->delete();
        return view('dashboard.especial.index')->with('status','Medicamento especial Eliminado');
    }
}
