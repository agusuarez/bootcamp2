<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class movies extends Controller
{
    public function index()
    {
        $movie = movie::all();
        return view('movies.index')->with('movie',$movie);
    }

    public function store(Request $request)
    {
        $movie = new movie();

       

        $movie->año = $request->get('año');
        $movie->titulo = $request->get('titulo');
        $movie->duracion = $request->get('duracion');
        $movie->sinopsis = $request->get('sinopsis');

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
