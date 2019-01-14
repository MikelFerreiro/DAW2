<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
session_start();
    if (!isset($_SESSION['idUser'])) {
        header('Location: login.php');
        exit();
    }
    $tareas = isset($_SESSION['tareas']) ? $_SESSION['tareas'] : array();
?>

<form method="POST" action="tareas.php">
   <ul>

    <?php
        $y=0;
        foreach ($tareas as $t):
    ?>
    <li>
        <p><?=$t[1]?></p>
        <?php if($t[2]==0):?>
            <button type="submit" name="marcar<?=$y?>">Marcar como realizada</button>
        <?php else: ?>
        <p>tarea realizada</p>
        <button type="submit" name="desMarcar<?=$y?>">Marcar tarea como no realizada</button>
        <?php endif;?>
        <button type="submit" name="borrar<?=$y?>">Borrar tarea</button>
    </li>   
    <?php
        $y++;
        endforeach; ?>
   </ul>
    <br>    
    <label for="textoTarea">Añadir una nueva tarea</label>
    <input type="text" id="textoTarea" name="textoTarea" placeholder="Rellena el texto de la tarea">
    <button type="submit" name="submitTarea">Añadir tarea</button>

    <?php
    for ($x = 0; $x < count($tareas); $x++) {
        if (isset($_POST['marcar' . $x])) {

            $tareas[$x][2] = 1;
            unset($_POST['marcar' . $x]);
            break;

        } elseif (isset($_POST['borrar' . $x])) {

            array_splice($tareas, $x, 1);
            unset($_POST['borrar' . $x]);
            break;
        } elseif (isset($_POST['desMarcar' . $x])) {

            $tareas[$x][2] = 0;
            unset($_POST['desMarcar' . $x]);
            break;
        }
    }

    if(isset($_POST['submitTarea']) && strlen($_POST['textoTarea'])!==0){

        array_push($tareas,array($_SESSION['idUser'],$_POST['textoTarea'],0));
        unset($_POST['textoTarea']);
    }

    $_SESSION['tareas']=$tareas;
    ?>
</form>
</body>
</html>