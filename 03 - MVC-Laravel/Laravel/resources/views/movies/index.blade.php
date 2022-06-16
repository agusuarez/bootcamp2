<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      
#grid{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: 430px;
}

#grid > div{
    
  
}

#titulo{

}

#divimg {
    width: 210px;
    height: 315px;
}

#container {
}

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 100%;
  height: 100%;
}

    </style>
    <title>Vista usuario</title>
    
</head>
<body>
    <div id="container">
        <a href="movies/create" class="btn btn-primary">Crear</a>
        <div id="grid">
        @foreach($movie as $movie)
            <div class="peli">
                <div id="divimg">
                    <img src="{{asset($movie->imagen)}}" alt="{{$movie->imagen}}" class="img-fluid img-thumbnail" width="50px">
                </div>
                <p id="titulo">{{$movie->titulo}}</p>
            </div>
        @endforeach

       
        </div>
    </div>
</body>
</html>