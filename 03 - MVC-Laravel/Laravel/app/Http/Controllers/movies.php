<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class movies extends Controller
{
    public function index()
    {
        $movie = movie::all();
        return view('movies.crud')->with('movie',$movie);
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'año' => 'required|integer|min:1800|max:2022',
            'titulo' => 'required',
            'duracion' => 'required|integer',
            'sinopsis' => 'required',
            'actorprincipalid' => 'required|integer'
        ]);


        $movie = new movie();

        $movie->año = $request->año;
        $movie->titulo = $request->titulo;
        $movie->duracion = $request->duracion;
        $movie->sinopsis = $request->sinopsis;

        if ($request->hasfile('imagen')){
            $file = $request->file('imagen');
            $rutadestino = 'images/imagenes/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadsuccess = $request->file('imagen')-> move($rutadestino,$filename);
            $movie->imagen= $rutadestino . $filename;
        }

        $movie->actorprincipalid = $request->get('actorprincipalid');
        $movie->save();
        return redirect('/movies');
    }

    public function create()
    {
        return view('movies.create');
    }
}
