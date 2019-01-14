/**
 * Created by 2gdaw04 on 17/12/2018.
 */
class Serie extends Entregable{


    constructor(titulo, creador, nTemp, genero) {
        super(titulo,genero);
        this.creador = creador ? creador : "";
        this.nTemp = nTemp ? nTemp : 3;

    }

    getAll(){
        return super.getAll()+"\nNúmero de temporadas: "+this.getNTemp+"\nCreador: "+this.getCreador;
    }

    get getCreador() {
        return this.creador;
    }

    set setCreador(value) {
        this.creador = value;
    }

    get getNTemp() {
        return this.nTemp;
    }

    set setNTemp(value) {
        this.nTemp = value;
    }

}