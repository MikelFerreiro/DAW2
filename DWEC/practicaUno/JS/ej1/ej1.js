/**
 * Created by 2gdaw04 on 29/10/2018.
 */
var login = [["MIKEL","12345A"],["PRUEBA","222"],["PRUEBA2","1111"]];

function checkDatos() {
let usuario = document.getElementById("user").value.toUpperCase();
let contraseña = document.getElementById("password").value;
var  resp="Login invalido";
login.forEach(function (e) {
    if(e[0]=== usuario && e[1]=== contraseña){
       resp="Login valido";
    }
});
alert(resp);
return false;
}