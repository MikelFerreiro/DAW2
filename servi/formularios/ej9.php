<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej6</title>
</head>
<body>
<form method="GET" action="ej9.php">
    <input type="number" name="radio" placeholder="Introduce el radio">
    <input type="number" name="altura" placeholder="Intorduce la altura">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['radio'])){
        $x=$_GET['radio'];
        $y=$_GET['altura'];
        $volumen=pi()*($x**2)*$y/3;
        echo "El volumen es igual a ", number_format($volumen,2,",","."),"<br>";

    }
    ?>
</body>
</html>