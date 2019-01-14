<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej1</title>
</head>
<body>

    <?php
    for($x=0;$x<=20;$x++){
        $numero[$x]=rand(0, 100);
        $cuadrado[$x]=$numero[$x]**2;
        $cubo[$x]=$numero[$x]**3;
    }
    echo "<ul style='display: inline-block'>";
    foreach ($numero as $y){
        echo "<li>$y</li>";
    }
    echo "</ul>";
    echo "<ul style='display: inline-block'>";
    foreach ($cuadrado as $n){
        echo "<li>$n</li>";
    }
    echo "</ul>";
    echo "<ul style='display: inline-block'>";
    foreach ($cubo as $m){
        echo "<li>$m</li>";
    }
    ?>
</body>
</html>