<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\coche_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlquilerController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all()->where('tipo', 'normal');
        $coches = Coche::all();

        return view('admin.creaAlquiler', ['usuarios' => $usuarios, 'coches' => $coches]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuario = User::find($request->usuario);
        $coche = Coche::find($request->coche);
        $fecha = today();

        if ($request->fecha) {
            $fecha = $request->fecha;
        }

        $usuario->coche()->attach($coche->id, ['fecha_alquiler' => $fecha]);

        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($idUser, $idCoche)
    {
        $alquiler = coche_user::where('user_id', $idUser)->where('coche_id', $idCoche)->get();
        $usuarios = User::all()->where('tipo', 'normal');
        $coches = Coche::all();


        return view('admin.edit' , ['alquiler' => $alquiler[0], 'usuarios' => $usuarios, 'coches' => $coches]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUser, $idCoche)
    {

        $usuario = User::find($idUser);
        $fecha = today();

        if ($request->fecha) {
            $fecha = $request->input('fecha');
        }

        $usuario->coche()->updateExistingPivot([$idCoche, $idUser], ['coche_id' => $request->input('coche'), 'fecha_alquiler' => $fecha], true);

        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($idUser, $idCoche)
    {
        $usuario = User::find($idUser);

        $usuario->coche()->detach($idCoche);

        return redirect('/');
    }

}
