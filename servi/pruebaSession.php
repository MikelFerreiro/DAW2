<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Session</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
}else {
    $_SESSION['visitas'] = 1;
}
?>
<?php
echo "Visitas: ".$_SESSION['visitas'];
?>

</body>
</html>