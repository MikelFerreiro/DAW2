<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ej1</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Bienvenido " ,ucfirst($_SESSION['user']);
}
session_destroy();
?>
</body>
</html>