/**
 * Created by 2gdaw04 on 29/10/2018.
 */
var login = [["MIKEL","12345A"],["PRUEBA","222"],["PRUEBA2","1111"]];

function checkDatos() {
var  resp="Login invalido";
login.forEach(function (e) {
    if(e[0]=== $("#user").val().toUpperCase() && e[1]=== $('#password').val()){
       resp="Login valido";
    }
});
alert(resp);
}