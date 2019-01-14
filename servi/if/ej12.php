<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej12</title>
</head>
<body>
<form method="GET" action="ej12.php">
    <label for="pregunta1">¿Como se define un String en PHP?</label>
    <select name="pregunta1">
        <option value="0"></option>
        <option value="1">String $variable</option>
        <option value="2">$variable = new String()</option>
        <option value="3">No se define</option>
        <option value="4">$variable = ""</option>
    </select>
    <br>
    <br>
    <label for="pregunta2">¿Que tipo de lenguaje es JavaScript?</label>
    <select name="pregunta2">
        <option value="0"></option>
        <option value="1">Compilado</option>
        <option value="2">Interpretado</option>
        <option value="3">Todas son ciertas</option>
        <option value="4">De bajo nivel</option>
    </select>
    <br>
    <br>
    <label for="pregunta3">¿Que tipo de lenguaje es PHP?</label>
    <select name="pregunta3">
        <option value="0"></option>
        <option value="1">Compilado</option>
        <option value="2">Interpretado</option>
        <option value="3">Todas son ciertas</option>
        <option value="4">De bajo nivel</option>
    </select>
    <br>
    <br>
    <label for="pregunta4">¿PHP es un lenguaje que se ejecuta en cliente o servidor?</label>
    <select name="pregunta4">
        <option value="0"></option>
        <option value="1">Cliente</option>
        <option value="2">Servidor</option>
        <option value="3">Ambos</option>
        <option value="4">Ninguno</option>
    </select>
    <br>
    <br>
    <label for="pregunta5">¿?</label>
    <select name="pregunta5">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>
    <br>
    <br>
    <label for="pregunta6">¿?</label>
    <select name="pregunta6">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>
    <br>
    <br>
    <label for="pregunta7">¿?</label>
    <select name="pregunta7">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>
    <br>
    <br>
    <label for="pregunta8">¿?</label>
    <select name="pregunta8">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>
    <br>
    <br>
    <label for="pregunta9">¿?</label>
    <select name="pregunta9">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>
    <br>
    <br>
    <label for="pregunta10">¿?</label>
    <select name="pregunta10">
        <option value="0"></option>
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>

    <button type="submit" name="submit">calcular</button>
</form>
<?php
if (isset($_GET['submit'])) {
    $puntos = 0;
    $_GET['pregunta1'] == 4 ? $puntos++ : '';
    $_GET['pregunta2'] == 2 ? $puntos++ : '';
    $_GET['pregunta3'] == 2 ? $puntos++ : '';
    $_GET['pregunta4'] == 2 ? $puntos++ : '';
    $_GET['pregunta5'] == 2 ? $puntos++ : '';
    $_GET['pregunta6'] == 4 ? $puntos++ : '';
    $_GET['pregunta7'] == 4 ? $puntos++ : '';
    $_GET['pregunta8'] == 4 ? $puntos++ : '';
    $_GET['pregunta9'] == 4 ? $puntos++ : '';
    $_GET['pregunta10'] == 4 ? $puntos++ : '';
    echo "Has sacado un ", $puntos;
}
?>
</body>
</html>