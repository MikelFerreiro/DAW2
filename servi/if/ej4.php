<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej6</title>
</head>
<body>
<form method="GET" action="ej4.php">
    <input type="number" name="horas" placeholder="Nº horas trabajadas">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['horas'])){
        $horas=$_GET['horas'];
        if($horas>40){
            $salario=($horas-40)*16+40*12;
        }else {
            $salario=$horas*12;
        }
        echo  "El salario es de ",$salario;
    }
    ?>
</body>
</html>