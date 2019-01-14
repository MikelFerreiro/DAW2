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
    $usuarios=array(
            [1,"mikel6","Mikel","Ferreiro","mikel@gmail.es","12345"],
            [2,"alexP","Alex","Martinez","alex@gmail.com","123Abc"],
            [3,"danieh","Dani","Barragues","dani@gmail.com","123"]
    );

    if (isset($_POST['submit'])) {
        $usuario = $_POST['user'];
        $password = $_POST['password'];
        foreach ($usuarios as $k) {
            if ($k[1] === $usuario && $k[5] === $password) {
                $_SESSION['idUser'] = $k[0];
                header('Location: tareas.php');
                exit();
            }
        }
        echo "el usuario o contraseña son incorrectos";
    }
    ?>
</form>
</body>
</html>