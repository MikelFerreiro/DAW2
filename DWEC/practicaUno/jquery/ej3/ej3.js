
function borrarDatos(){
    let inputs=$("#input");
    for (let x=0;x<inputs.length;x++) { inputs[x].value=""; }
    $("#comentarios").value="";
}

$('#enviar').click(function () {
    let tlfn=$('#tlfn');
    let dir=$('#dir');
    let nombre=$('#nombre');
    let mensaje="";

    if(nombre.val()===""){
        nombre.css("background-color","red");
        nombre.value="";
        mensaje+="- El nombre no puede estar vacio\n";
    }else{
        nombre.css("background-color","white");
    }
    if(tlfn.val().length!=9){
        tlfn.css("background-color","red");
        tlfn.value="";
        mensaje+="- Inserta un nº de teléfono valido\n";
    }else{
        tlfn.css("background-color","white");
    }
    if(dir.val().length<=2){
        dir.css("background-color","red");
        dir.value="";
        mensaje+="- La direccion no puede contener menos de 3 carácteres\n";
    }else{
        dir.css("background-color","white");
    }
    if(mensaje===""){
        alert("Formulario enviado");
        borrarDatos();
    }else{
        alert(mensaje);
    }
});