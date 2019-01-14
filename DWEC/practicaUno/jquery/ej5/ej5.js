function enviarDatos() {
    let nombre=$('#nombre');
    let apellidos=$('#apellidos');
    let email=$('#email');
    let poblacion=$('#poblacion');
    let provincia=$('#provincia');
    let edad=$("[name=edad]");

    let regEmail= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let mensaje="";

    mensaje+=comprobarDatos(nombre)?"": "- El nombre no puede estar vacio\n";
    mensaje+=comprobarDatos(apellidos)?"": "- Los apellidos no pueden estar vacios\n";
    mensaje+=comprobarDatos(poblacion)?"": "- La población no puede estar vacia\n";
    mensaje+=comprobarDatos(provincia)?"": "- La provincia no puede estar vacia\n";
    if(!regEmail.test(email.val())){
        email.css("background-color","red");
        email.value="";
        mensaje+="- El formato de email es erroneo\n";
    }else{
        email.css("background-color","white");
    }
    let msg="";
    for (i = 1; i<4; i++) {
        if($('#check'+i).prop('checked') === true){
            msg="";
            $("#como").css("background-color","white");
            break;
        }
        msg="- Selecciona como nos has conocido\n";
        $("#como").css("background-color","red");
    }
    mensaje+=msg;
    msg="";
    for (i = 1; i<edad.length; i++) {
        if(edad[i].checked === true){
            msg="";
            $("#ledad").css("background-color","white");
            break;
        }
        msg="- Selecciona tu edad\n";
        $("#ledad").css("background-color","red");
    }
    mensaje+=msg;
    if(mensaje===""){
        alert("Formulario enviado");
        borrarDatos();
    }else{
        alert(mensaje);
    }
};

function comprobarDatos(dato){
    if(dato.val()===""){
        dato.css("background-color","red");
        dato.value="";
        return false;
    }else{
        dato.css("background-color","white");
        return true;
    }
}

function borrarDatos(){
    let inputs=$("input");
    for (let x=0;x<inputs.val().length;x++) {
        inputs[x].value="";
        inputs[x].checked=false;
    }
}