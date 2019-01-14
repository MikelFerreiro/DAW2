<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej2</title>
</head>
<body>
<form method="GET" action="ej2.php">
    <input type="number" name="horas" placeholder="Introduce la hora">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['horas'])){
        $horas=$_GET['horas'];
        if($horas>=6 && $horas <=12 ){
            echo  "Buenos días <br>";
        }elseif($horas>12 && $horas<21){
            echo  "Buenas tardes <br>";
        }else{
            echo  "Buenas noches <br>";
        }
    }
    ?>
</body>
</html>