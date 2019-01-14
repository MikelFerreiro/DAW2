<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej1</title>
    <link rel="stylesheet" href="logIn.css" type="text/css">
</head>
<body>

<form method="POST" action="logIn.php">
    <label for="user">Usuario:</label>
    <input type="text" name="user" id="user" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit" name="submit">Acceder</button>
</form>
<?php
include'../conexionesBBDD.php';
session_start();

if (!isset($_SESSION['contador']) || $_SESSION['contador'] < 2) {
    $diccionario = validarUsuario();
    if (isset($_POST['submit'])) {
        $usuario = $_POST['user'];
        $password = $_POST['password'];
            foreach ($diccionario as $k => $p) {
                if ($k === strtoupper($usuario) && $p === $password) {
                    $_SESSION['user'] = $usuario;
                    header('Location: index.php');
                    exit();
                }
            }
            isset($_SESSION['contador']) ? $_SESSION['contador']++ : $_SESSION['contador'] = 1;
    }
} else {
    echo "<h2 style='color:red;'>NO PUEDES ACCEDER</h2>";
}
?>
</body>
</html>