<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\LibroUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $usuarios = Libro::find(1)->user()->paginate(1);

        return view('libros.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all()->where('tipo', 'normal');
        $libros = Libro::all();

        return view('libros.crear', ['usuarios' => $usuarios, 'libros' => $libros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = User::find($request->input('usuario'));
        $libro = Libro::find($request->input('libro'));

        $usuario->libro()->attach($libro, ['fecha' => $request->input('fecha')]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($idUser, $idLibro)
    {
        $alquiler = LibroUser::where('user_id', $idUser)->where('libro_id', $idLibro)->get();
        $usuarios = User::all()->where('tipo', 'normal');
        $libros = Libro::all();

        return view('libros.editar', ['alquiler' => $alquiler[0], 'usuarios' => $usuarios, 'libros' => $libros]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibroUser $alquiler)
    {
        dd($alquiler);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUser, $idLibro)
    {
        $libro = Libro::find($idLibro);

        $libro->user()->detach($idUser);

        return redirect('/dashboard');
    }
}
