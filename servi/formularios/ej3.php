<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej3</title>
</head>
<body>
<form method="GET" action="ej3.php">
    <input type="number" name="pesetas" >
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['pesetas'])){
    echo $_GET['pesetas']/166, "<br>";
    }
    ?>
</body>
</html>