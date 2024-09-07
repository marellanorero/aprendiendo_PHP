<?php include 'includes/header.php';

$nombre = "Juan"; //Este es el equivalente a let nombre = "Juan" en JS
//$_nombre = "Juan";
//$nombre_="Juan";

$nombre = "Laura"; //en el caso de php si puedo reasignar variables
var_dump($nombre); //imprime más información

echo $nombre;

define('constante', "Este es el valor de la constante");
echo constante; //Se llama sin $

const constante2 = "Hola 2";
echo constante2;

include 'includes/footer.php';