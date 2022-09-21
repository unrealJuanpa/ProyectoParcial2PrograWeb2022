<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo view('dashboard.login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $logins=Login::all();
        //dd($logins[0]['username']);

        for ($i = 0; $i < count($logins->all()); $i++ ) {
            if ($logins[$i]['username'] == $request->all()['username'] && $logins[$i]['password'] == $request->all()['password']) {
                if ($logins[$i]['is_admin'] == 1) {
                    return view('dashboard.menus.dashadmin');
                    break;
                }
                else {
                    if ($logins[$i]['is_admin'] == 2) {
                        return view('dashboard.medicontrolados.index');
                        break;
                    }
                    else{
                        if ($logins[$i]['is_admin'] == 0) {
                            return view('dashboard.menus.dashcliente');
                            break;
                        }
                    }
                }
            }
        }

        /*
        if ($request->all()['username'] == "usuario1" && $request->all()['password'] == "pepian") {
            //echo view('dashboard.misc.index'
        }
        else {
            if ($request->all()['username'] == "usuario2" && $request->all()['password'] == "pizza") {
                return view('dashboard.vistausuario.index');
            }
        }
        */

        return back()->with('status', 'Usuario o contrasenia incorrectos!');
        // aqui se cargan los datos de la tabla
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
