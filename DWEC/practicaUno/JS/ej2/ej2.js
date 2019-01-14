/**
 * Created by 2gdaw04 on 29/10/2018.
 */
var anotaciones = new Array();

function checkDatos() {
    try{
        document.getElementById("visualizar").innerHTML="";
        let anotacion = document.getElementById("anotacion").value;
        let fecha= document.getElementById("fecha").value;
        if(anotacion== null || anotacion ===""){
            throw new Error("Escribe una anotacion");
        }
        if(fecha== null || fecha ===""){
            throw new Error("Selecciona una fecha");
        }
        if(anotaciones.length===0){
            anotaciones.push(new Array(fecha,anotacion))
        }else{
            for(x=0;x<anotaciones.length;x++){
                if(anotaciones[x][0]===fecha){
                    anotaciones[x].push(anotacion);
                    break;
                }else if(x===anotaciones.length){
                    anotaciones.push(new Array(fecha,anotacion));
                }
            }
        }
        alert("Anotacion guardada");
        document.getElementById("anotacion").value="";
    }catch (e){
        alert(e);
    }

}
function visualizarDatos() {
    try{
        document.getElementById("visualizar").innerHTML="";
    let fecha= document.getElementById("fecha").value;
    if(fecha== null || fecha ===""){
        throw new Error("Selecciona una fecha");
    }
    for (x in anotaciones){
        if(anotaciones[x][0]==fecha){
            anotaciones[x].forEach(function (e) {
               if(e!=anotaciones[x][0]){
               document.getElementById("visualizar").innerHTML += e+"<br>";
               }
            });
            break;
        }
    }

    }catch (e){
        alert(e);
    }
}