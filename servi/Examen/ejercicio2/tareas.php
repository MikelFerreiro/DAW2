<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
session_start();
require_once 'ConsultasBD.php';
    if (!isset($_SESSION['idUser'])) {
        header('Location: login.php');
        exit();
    }
    $tareas = obtenerTareas($_SESSION['idUser']);
?>

<form method="POST" action="tareas.php">
   <ul>

    <?php
        foreach ($tareas as $t):
    ?>
    <li>
        <p><?=$t[1]?></p>
    </li>   
    <?php
        endforeach; ?>
   </ul>
    <br>    
    <label for="textoTarea">Añadir una nueva tarea</label>
    <input type="text" id="textoTarea" name="textoTarea" placeholder="Rellena el texto de la tarea">
    <button type="submit" name="submitTarea">Añadir tarea</button>

    <?php

    if(isset($_POST['textoTarea']) && strlen($_POST['textoTarea'])!==0){
        insertarTareas($_POST['textoTarea'],$_SESSION['idUser']);
        unset($_POST['textoTarea']);
    }

    ?>
</form>
</body>
</html>