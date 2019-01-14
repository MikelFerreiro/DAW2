<html>
<head>

</head>
<body>
<?php
include_once 'Gato.php';
include_once 'Perro.php';

$gatito= new Gato("Misifu","macho" ,"miau","Gato",7);
$perro=new Perro("Eder","hembra","Guau","Perro",2);

var_dump($gatito);
echo  "</br>";
var_dump($perro);
echo  "</br>";
$gatito->hacerRuido($gatito->getRaza());
echo  "</br>";
$perro->hacerRuido($perro->getRaza());
?>
</body>
</html>