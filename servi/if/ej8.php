<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej7</title>
</head>
<body>
<form method="GET" action="ej8.php">
    <input type="number" name="nota1" placeholder="nota 1">
    <input type="number" name="nota2" placeholder="nota 2">
    <input type="number" name="nota3" placeholder="nota 3">
    <button type="submit" name="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['submit'])){
        !empty($_GET['nota1'])?$n1=$_GET['nota1']:$n1=0;
        !empty($_GET['nota2'])?$n2=$_GET['nota2']:$n2=0;
        !empty($_GET['nota3'])?$n3=$_GET['nota3']:$n3=0;

        $media=number_format(($n1+$n2+$n3)/3,2);
        if($media>=6){
            if($media<=7){
                $nota="bien";
            }elseif ($media<=9){
                $nota="notable";
            }else{
                $nota="sobresaliente";
            }
        }elseif ($media>=5){
            $nota="Suficiente";
        }else{
            $nota="Insuficiente";
        }
        echo  "La nota es un ", $nota, "  ($media)";
    }
    ?>
</body>
</html>