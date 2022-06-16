class Pelicula {
    constructor (nombre,año,duracion){
        this.nombre = nombre;
        this.año = año;
        this.duracion = duracion;
    }

    //Metodos
    play(){
        console.log("play");
    }
    pause(){
        console.log("pause");
    }
    resume(){
        console.log("resume");
    }
}

class Actor {
    constructor (nombre, edad){
        this.nombre = nombre;
        this.edad = edad;
    }
}

class EventEmitter{
    constructor(){

    }
    on(eventoNombre){

    }
    emit(eventoNombre){

    }
    off(eventoNombre){

    }
    
}