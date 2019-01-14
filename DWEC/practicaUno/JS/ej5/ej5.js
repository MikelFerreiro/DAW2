function enviarDatos() {
    let nombre=document.getElementById('nombre');
    let apellidos=document.getElementById('apellidos');
    let email=document.getElementById('email');
    let poblacion=document.getElementById('poblacion');
    let provincia=document.getElementById('provincia');
    let edad=document.getElementsByName("edad");

    let regEmail=
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let mensaje="";

    mensaje+=comprobarDatos(nombre)?"": "- El nombre no puede estar vacio\n";
    mensaje+=comprobarDatos(apellidos)?"": "- Los apellidos no pueden estar vacios\n";
    mensaje+=comprobarDatos(poblacion)?"": "- La población no puede estar vacia\n";
    mensaje+=comprobarDatos(provincia)?"": "- La provincia no puede estar vacia\n";
    if(!regEmail.test(email.value)){
        email.style.backgroundColor="red";
        email.value="";
        mensaje+="- El formato de email es erroneo\n";
    }else{
        email.style.backgroundColor="white";
    }
    let msg="";
    for (i = 1; i<4; i++) {
        if(document.getElementById('check'+i).checked === true){
            msg="";
            document.getElementById("como").style.color="white";
            break;
        }
        msg="- Selecciona como nos has conocido\n";
        document.getElementById("como").style.color="red";
    }
    mensaje+=msg;
    msg="";
    for (i = 1; i<edad.length; i++) {
        if(edad[i].checked === true){
            msg="";
            document.getElementById("ledad").style.color="white";
            break;
        }
        msg="- Selecciona tu edad\n";
        document.getElementById("ledad").style.color="red";
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
    if(dato.value===""){
        dato.style.backgroundColor="red";
        dato.value="";
        return false;
    }else{
        dato.style.backgroundColor="white";
        return true;
    }
}

function borrarDatos(){
    let inputs=document.getElementsByTagName("input");
    for (let x=0;x<inputs.length;x++) {
        inputs[x].value="";
        inputs[x].checked=false;
    }
}