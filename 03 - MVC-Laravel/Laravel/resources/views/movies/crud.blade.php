@extends('layouts.plantillabase');

@section('contenido')
<a href="movies/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4" >
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Año</th>
            <th scope="col">Titulo</th>
            <th scope="col">Duracion</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Imagen</th>
            <th scope="col">ActorPrincipalID</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($movie as $movie)
        <tr> 
            <td>{{$movie->id}}</td>
            <td>{{$movie->año}}</td>
            <td>{{$movie->titulo}}</td>
            <td>{{$movie->duracion}}</td>
            <td>{{$movie->sinopsis}}</td>
            <td><img src="{{asset($movie->imagen)}}" alt="{{$movie->imagen}}" class="img-fluid img-thumbnail" width="50px"></td>
            <td>{{$movie->actorprincipalid}}</td>
            <td>
                <form action="{{route ('movies.destroy', $movie->id)}}" method="POST">
                <a href="/movies/{{$movie->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection