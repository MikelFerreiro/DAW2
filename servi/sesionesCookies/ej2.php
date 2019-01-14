<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Session</title>
</head>
<body>
<form method="GET" action="ej2.php">
    <input type="number" name="numeros">
    <button type="submit">sumar</button>
</form>
<?php
session_start();

if (isset($_GET['numeros'])) {
    if ($_GET['numeros'] > 0) {
        if($_GET['numeros']%2===0) {
            isset($_SESSION['pares']) ? $_SESSION['pares'] += $_GET['numeros'] : $_SESSION['pares'] = $_GET['numeros'];
            isset($_SESSION['contadorPar']) ? $_SESSION['contadorPar']++ : $_SESSION['contadorPar'] = 1;
        }else {
            isset($_SESSION['impares']) ? $_SESSION['impares'] += $_GET['numeros'] : $_SESSION['impares'] = $_GET['numeros'];
            isset($_SESSION['contadorImpar']) ? $_SESSION['contadorImpar']++ : $_SESSION['contadorImpar'] = 1;
        }
    } else {
        echo "Se han introducido ",$_SESSION['contadorPar']+$_SESSION['contadorImpar']," numeros <br>";
        echo "la media de los impares es ", number_format($_SESSION['impares'] / $_SESSION['contadorImpar'], 2),"<br>";
        echo "la media de los pares es ", number_format($_SESSION['pares'] / $_SESSION['contadorPar'], 2),"<br>";
    }
}
?>


</body>
</html>