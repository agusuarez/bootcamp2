<a href="actors/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($actors as $actor)
        <tr> 
            <td>{{$actor->id}}</td>
            <td>{{$actor->nombre}}</td>
            <td>{{$actor->fechanacimiento}}</td>
            <td>
            <form action="{{ route ('actors.destroy', $actor->id)}}" method="POST"> 
                <a href="/actors/{{$actor->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>