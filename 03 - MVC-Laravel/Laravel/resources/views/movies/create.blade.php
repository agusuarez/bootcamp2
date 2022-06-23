<h2>Crear peliculas</h2>
<form action="/movies" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Año</label>
    <input type="number" class="form-control" id="año" name="año" min="1800" max="2022" value="{{old('año')}}">
    @error('año')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
    @error('titulo')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Duracion (minutos)</label>
    <input type="number" class="form-control" id="duracion" name="duracion" value="{{old('duracion')}}">
    @error('duracion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sinopsis</label>
    <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{old('sinopsis')}}">
    @error('sinopsis')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Actor Principal ID</label>
    <input type="number" class="form-control" id="actorprincipalid" name="actorprincipalid" value="{{old('actorprincipalid')}}">
    @error('actorprincipalid')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>
  <a href="/movies" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>