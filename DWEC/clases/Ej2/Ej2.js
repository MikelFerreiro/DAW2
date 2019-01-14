/**
 * Created by 2gdaw04 on 17/12/2018.
 */

var series= [new Serie("Game of Thrones","George R.R. Martin", 8,"Muerte"),
    new Serie("Supernatural","Eric Kripke", 14,"Sobrenatural"),
    new Serie("The flash","Alguien"),
    new Serie("Serie Random","Creador Random",2),
    new Serie("Firefly","Joss Whedon")];

var videojuegos=[
    new Videojuego("Doom",40,"shooter","Bethesda"),
    new Videojuego("Skyrim",200,"openWorld","Bethesda"),
    new Videojuego("CoD"),
    new Videojuego("IconoClasts",18),
    new Videojuego("Fortnite",0)
    ]

series[0].entregar();
series[1].entregar();
series[3].entregar();
videojuegos[0].entregar();
videojuegos[1].entregar();

let entregados=0;
series.forEach(s=>s.isEntregado()?entregados++:"");
videojuegos.forEach(v=>v.isEntregado()?entregados++:"");

alert("Hay "+entregados+" series y videojuegos entregados");

let maxTemp=series[0];
series.forEach(s=>maxTemp=s.compareTo(maxTemp));
alert("la serie con más temporadas es "+maxTemp.getTitulo+". \nDebajo más informacion:\n\n"+maxTemp.getAll());


let maxHoras=videojuegos[0];
videojuegos.forEach(v=>maxHoras=v.compareTo(maxHoras));
alert("El videjuego con más horas estimadas es "+maxHoras.getTitulo+". \nDebajo más informacion:\n\n"+maxHoras.getAll());
