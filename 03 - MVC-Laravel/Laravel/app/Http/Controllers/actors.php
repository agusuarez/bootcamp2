<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actor;

class actors extends Controller
{
    public function index()
    {
        $actors = actor::all();
        return view('actors.index')->with('actors',$actors);
    }

    public function create()
    {
        return view('actors.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required',
            'fechanacimiento' => 'required|date'
        ]);
        $actors = new actor();
        $actors->nombre = $request->get('nombre');
        $actors->fechanacimiento = $request->get('fechanacimiento');
        $actors->save();
        return redirect('/actors');
    }

    public function destroy($id)
    {
        $actors = actor::find($id);
        $actors->delete();
        return redirect('/actors');
    }


}
