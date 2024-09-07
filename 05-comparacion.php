<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero1 == $numero3);
echo "<br>";

var_dump($numero1 === $numero4); //revisa tb el tipo de dato
echo "<br>";

var_dump($numero1 <=> $numero2); // si el n° de la derecha es mayor imprime -1
echo "<br>";

var_dump($numero2 <=> $numero3); // si son iguales imprime 0
echo "<br>";

var_dump($numero2 <=> $numero1); // si el n° de la izquierda es mayor imprime 1
echo "<br>";


include 'includes/footer.php';