<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="login.php">
    <input type="text" id="user" name="user">
    <input type="password" id="password" name="password">
    <button type="submit" name="submit">Log In</button>
    <?php
    session_start();
    require_once 'consultasBD.php';
    if (isset($_POST['submit'])) {
        $usuario = $_POST['user'];
        $password = $_POST['password'];
        $id = comprobarUsuario($usuario, $password);
        if ($id !== -1) {
            $_SESSION['idUser'] = $id;
            header('Location: tareas.php');
            exit();
        }
        echo "el usuario o contraseña son incorrectos";
    }


    ?>
</form>
</body>
</html>