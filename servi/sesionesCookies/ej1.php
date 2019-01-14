<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Session</title>
</head>
<body>
<form method="GET" action="ej1.php">
    <input type="number" name="numeros">
    <button type="submit">sumar</button>
</form>
<?php
session_start();

    if (isset($_GET['numeros'])) {
        if($_GET['numeros']>0) {
        if (isset($_SESSION['numeros'])) {
            $_SESSION['numeros'] += $_GET['numeros'];

        } else {
            $_SESSION['numeros'] = $_GET['numeros'];

        }
        if(isset($_SESSION['contador'])){
            $_SESSION['contador']++;
        }else{
            $_SESSION['contador'] =1;
        }
        echo "Total: " . $_SESSION['numeros'];

    }else{
            echo "la media es ",number_format($_SESSION['numeros']/$_SESSION['contador'],2);
        }
}
?>


</body>
</html>