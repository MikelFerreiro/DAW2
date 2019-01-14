<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej19</title>
</head>
<body>
<form method="GET" action="ej19.php">
    <input type="number" name="numero" placeholder="introduce un numero" min="0" max="99999">
    <button type="submit" name="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['submit'])){
        $n=str_split($_GET['numero']);
            if($n[0]!==$n[$n.count()]){
            echo "aaaaaaa";
            }


    }
    ?>
</body>
</html>