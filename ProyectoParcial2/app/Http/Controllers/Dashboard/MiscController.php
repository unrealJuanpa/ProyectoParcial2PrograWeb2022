<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Misc;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMiscPost;

class MiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miscs=Misc::orderBy('created_at','asc') -> cursorpaginate(3);
        echo view('dashboard.misc.index',['miscs'=>$miscs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('dashboard.misc.create',["misc"=>new Misc()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiscPost $request)
    {
        Misc::create($request->validated());
        return back()->with('status','Miscelaneo Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function show(Misc $misc)
    {
        echo view('dashboard.misc.show', ["misc"=>$misc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function edit(Misc $misc)
    {
        echo view('dashboard.misc.edit', ["misc"=>$misc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMiscPost $request, Misc $misc)
    {
        $misc->update($request->validated());
        return back()->with('status','Miscelaneo Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misc $misc)
    {
        $misc->delete();
        return back()->with('status','Miscelaneo Eliminado');
    }
}
