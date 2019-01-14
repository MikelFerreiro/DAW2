<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej6</title>
</head>
<body>
<form method="GET" action="ej8.php">
    <input type="number" name="horas" placeholder="Nº horas trabajadas">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['horas'])){
        $h=$_GET['horas'];
        echo "Salario: ",$h*12, "<br>";

    }
    ?>
</body>
</html>