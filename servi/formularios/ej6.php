<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej6</title>
</head>
<body>
<form method="GET" action="ej6.php">
    <input type="number" name="base">
    <input type="number" name="altura">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['base'])){
        $x=$_GET['base'];
        $y=$_GET['altura'];
        echo $x*$y/2, "<br>";

    }
    ?>
</body>
</html>