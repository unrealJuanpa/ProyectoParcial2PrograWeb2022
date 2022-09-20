<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Misc;
use Illuminate\Http\Request;

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
        echo view('dashboard.misc.create',["misc"=>new Medicamento()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Misc::create($request->validated());
        return back()->with('status','Medicamento Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function show(Misc $misc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function edit(Misc $misc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misc $misc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misc $misc)
    {
        //
    }
}
