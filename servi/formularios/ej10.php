<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej6</title>
</head>
<body>
<form method="GET" action="ej10.php">
    <input type="number" name="megaBites" placeholder="Introduce Mb">
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['megaBites'])){
        $x=$_GET['megaBites'];
        echo $x," Mb, son ", $x*1024," Kb <br>";

    }
    ?>
</body>
</html>