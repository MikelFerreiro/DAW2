<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej7</title>
</head>
<body>
<form method="GET" action="ej7.php">
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

        echo  "La nota media es de ",number_format(($n1+$n2+$n3)/3,2);
    }
    ?>
</body>
</html>