<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej4</title>
</head>
<body>
    <form method="GET" action="ej4.php">
        <input type="number" name="uno">
        <input type="number" name="dos">
        <button type="submit">enviar</button>
    </form>
    <?php
    if(isset($_GET['uno'])){
        $numero= explode()
        str_replace($_GET['uno'],$numero);
        echo implode(" ",$numero);
    }else{
        for($x=0;$x<=100;$x++){
            $numero[$x]=rand(0, 20);
        }
        echo implode(" ",$numero);
    }

    $_SESSION['varname'] = $var_value;
    ?>
</body>
</html>