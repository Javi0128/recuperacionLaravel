<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->tipo == 'admin') {
            $todos = Coche::all();
        }else{
            $todos = Coche::all()->where('user_id', $user->id);
        }


        return view('principal', ['todos' => $todos, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all()->where('tipo', 'normal');

        return view('coche.add', ['usuarios' => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cocheNuevo = new Coche();

        $cocheNuevo->user_id = $request->input('usuario');
        $cocheNuevo->marca = $request->input('marca');
        $cocheNuevo->modelo = $request->input('modelo');
        $cocheNuevo->year = $request->input('year');

        $cocheNuevo->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function show(Coche $coche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function edit($idCoche)
    {
        $coche = Coche::find($idCoche);

        return view('coche.edit', ['coche' => $coche]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCoche)
    {
        $cocheEditar = Coche::find($idCoche);

        $cocheEditar->marca = $request->input('marca');
        $cocheEditar->modelo = $request->input('modelo');
        $cocheEditar->year = $request->input('year');

        $cocheEditar->save();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCoche)
    {
        $coche = Coche::find($idCoche);

        $coche->destroy($idCoche);

        return redirect('/dashboard');

    }
}
