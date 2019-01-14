<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej2</title>
</head>
<body>
<form method="GET" action="ej2.php">
    <input type="number" name="euros" >
    <button type="submit">calcular</button>
</form>
    <?php
    if(isset($_GET['euros'])){
    echo $_GET['euros']*166, "<br>";
    }
    ?>
</body>
</html>