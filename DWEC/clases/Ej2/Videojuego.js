/**
 * Created by 2gdaw04 on 17/12/2018.
 */
class Videojuego extends Entregable{
    constructor(titulo, horas, genero, compania){
        super(titulo,genero);
        this.horas= horas? horas : 10;
        this.compania= compania? compania: "";;
    }

    getAll(){
        return super.getAll()+"\nNúmero de horas: "+this.getHoras+"\nCompañia: "+this.getCompania;
    }

    get getHoras() {
        return this.horas;
    }

    set setHoras(value) {
        this.horas = value;
    }


    get getCompania() {
        return this.compania;
    }

    set setCompania(value) {
        this.compania = value;
    }
}