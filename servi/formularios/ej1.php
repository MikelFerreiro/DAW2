<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej1</title>
</head>
<body>
<form method="GET" action="ej1.php">
    <input type="number" name="x">
    <input type="number" name="y">
    <button type="submit">multiplicar</button>
</form>
    <?php
    if(isset($_GET['x'])){
    echo $_GET['x']*$_GET['y'], "<br>";
    }
    ?>
</body>
</html>