document.getElementById("enviar").onclick=function () {
    let tlfn=document.getElementById('tlfn');
    let dir=document.getElementById('dir');
    let nombre=document.getElementById('nombre');
    let mensaje="";

    if(nombre.value===""){
        nombre.style.backgroundColor="red";
        nombre.value="";
        mensaje+="- El nombre no puede estar vacio\n";
    }else{
        nombre.style.backgroundColor="white";
    }
    if(tlfn.value.length!=9){
        tlfn.style.backgroundColor="red";
        tlfn.value="";
        mensaje+="- Inserta un nº de teléfono valido\n";
    }else{
        tlfn.style.backgroundColor="white";
    }
    if(dir.value.length<=2){
        dir.style.backgroundColor="red";
        dir.value="";
        mensaje+="- La direccion no puede contener menos de 3 carácteres\n";
    }else{
        dir.style.backgroundColor="white";
    }
    if(mensaje===""){
        alert("Formulario enviado");
        borrarDatos();
    }else{
        alert(mensaje);
    }
};

function borrarDatos(){
    let inputs=document.getElementsByTagName("input");
    for (let x=0;x<inputs.length;x++) { inputs[x].value=""; }
    document.getElementById("comentarios").value="";
}