<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej4</title>
</head>
<body>
<form method="GET" action="ej4.php">
    <input type="number" name="x">
    <input type="number" name="y">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['x'])){
        $x=$_GET['x'];
        $y=$_GET['y'];
        echo $x+$y, "<br>";
        echo $x-$y, "<br>";
        echo $x/$y, "<br>";
        echo $x*$y, "<br>";
    }
    ?>
</body>
</html>