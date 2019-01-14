
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Base de datos <u>banco</u></h1>
<h2>Alta de cliente</h2>
<form action="inserts.php" method="post">
    DNI <input type="text" name="dni" required><br>
    Nombre <input type="text" name="nombre"><br>
    Dirección <input type="text" name="direccion"><br>
    Teléfono <input type="tel" name="telefono"><br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST['submit'])) {

// Conexión a la base de datos
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=pruebaconexion;charset=utf8", "root");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
    }
// Comprueba si ya existe un cliente con el DNI introducido
    $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=" . $_POST['dni']);
    if ($consulta->rowCount() > 0) {
        ?>
        Ya existe un cliente con DNI <?= $_POST['dni'] ?><br>
        Por favor, vuelva a la <a href="pruebaConexion.php">página de alta de clien\
            te</a>.
        <?php
    } else {
        $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dni]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";
//echo $insercion;
        $conexion->exec($insercion);
        echo "Cliente dado de alta correctamente.";
        $conexion = null;
    }
}
?>
</body>
</html>
