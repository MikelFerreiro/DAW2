/**
 * Created by 2gdaw04 on 17/12/2018.
 */
class Entregable {

    constructor(titulo, genero) {
        this.titulo = titulo ? titulo : "";
        this.genero = genero ? genero : "";
        this.entregado = false;
    }

    entregar() {
        this.entregado = true;
    }

    devolver() {
        this.entregado = false;
    }

    isEntregado(){
        return this.entregado;
    }

    compareTo(objeto) {
       let x= this.constructor.name==="Serie"?this.getNTemp:this.getHoras;
       let y=objeto.constructor.name==="Serie"?objeto.getNTemp:objeto.getHoras;

        return (x > y) ? this : objeto;
    }

    getAll(){
        return "Titulo: "+this.getTitulo+"\nGenero: "+this.getGenero;
    }
    get getTitulo() {
        return this.titulo;
    }

    set setTitulo(value) {
        this.titulo = value;
    }

    get getGenero() {
        return this.genero;
    }

    set setGenero(value) {
        this.genero = value;
    }
}