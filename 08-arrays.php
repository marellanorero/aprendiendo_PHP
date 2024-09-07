<?php include 'includes/header.php';
//$carrito = array();
$carrito = ['Tablet','Televisión', 'Computador'];

//util para ver los contenido de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

//Acceder a elemento de un array
echo $carrito[1];

//añade elemento en el indice 3 de un arreglo
$carrito[3] ="Nuevo Producto ...";

//añadir un elemento nuevo al final
array_push($carrito, 'audífonos');

//Añadir al inicio
array_unshift($carrito, 'Smartwatch');

//util para ver los contenido de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
//util para ver los contenido de un array
echo "<pre>";
var_dump($carrito);
echo "<pre>";

echo $cliente[1];
include 'includes/footer.php';