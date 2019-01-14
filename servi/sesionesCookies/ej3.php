<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Session</title>
</head>
<body>
<form method="GET" action="ej3.php">
    <input type="number" name="numeros">
    <button type="submit">sumar</button>
</form>
<?php
session_start();

if (isset($_GET['numeros'])) {

    isset($_SESSION['numeros']) ? $_SESSION['numeros'] += $_GET['numeros'] : $_SESSION['numeros'] = $_GET['numeros'];
    isset($_SESSION['contador']) ? $_SESSION['contador']++ : $_SESSION['contador'] = 1;

    if ($_SESSION['numeros'] > 10000) {
        echo "Se han introducido ", $_SESSION['contador'], " numeros <br>";
        echo "El total es ", $_SESSION['numeros'], "<br>";
        echo "la media es ", number_format($_SESSION['numeros'] / $_SESSION['contador'], 2), "<br>";
    }
}
?>


</body>
</html>