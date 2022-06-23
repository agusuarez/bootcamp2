<form action="/actors" method="POST">
    @csrf
  
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="{{old('fechanacimiento')}}">
    @error('fechanacimiento')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <a href="/actors" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
