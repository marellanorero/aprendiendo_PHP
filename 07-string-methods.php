<?php include 'includes/header.php';

$nombreCliente = "Juan";

//Conocer extensión de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertir a mayusculas
echo strtoupper($nombreCliente);
//minusculas
echo strtolower($nombreCliente);

$mail1="correo@correo.com";
$mail2="Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Juan', 'J', $nombreCliente);


// revisar si un string existe
echo strpos($nombreCliente, 'Juan');
echo strpos($nombreCliente, 'Laura');

echo "<br>";
$tipoCliente ="Premium";
echo "El Cliente" . $nombreCliente . " es " . $tipoCliente;
echo "<br>";
echo "El Cliente {$nombreCliente} es ${tipoCliente}";

include 'includes/footer.php';