<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej2</title>
</head>
<body>
    <form method="GET" action="ej2.php">
        <input type="number" nombre="1">
        <input type="number" nombre="2">
        <input type="number" nombre="3">
        <input type="number" nombre="4">
        <input type="number" nombre="5">
        <input type="number" nombre="6">
        <input type="number" nombre="7">
        <input type="number" nombre="8">
        <input type="number" nombre="9">
        <input type="number" nombre="10">

        <button type="submit">enviar</button>
    </form>
    <?php
        if(isset($_GET["1"])){
            for($x=0;$x<11;$x++){
                $n[$x]=$_GET["$x"];
            }
            $maximo=$n[0];
            $minimo=$n[0];
            foreach ($n as $y){
                if($y>$maximo){
                    $maximo=$y;
                }elseif ($y<$minimo){
                    $minimo=$y;
                }
            }

            echo "maximo: $maximo";
            echo "minimo: $minimo";
        }
    ?>
</body>
</html>