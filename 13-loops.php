<?php include 'includes/header.php';

// While

$i = 0; // Inicializador - primero verá la condición para luego ejecutar

while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While - primero ejecuta el código y luego observa la condición
$i = 0;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);

echo "<br>";
//for
for($i=0; $i < 10; $i++){
    echo $i . "<br>";
  }

  echo "<br>";
/*
Ejemplo: 
  3 imprimir Fizz
  5 imprimir Buzz
  3 y 5 Imprimir FIZZ BUZZ */

 //For Loop.
/*  for($i = 1; $i < 1000; $i++ ):
     if($i % 3 === 0 && $i % 5 === 0):
         echo $i . " - FIZZ BUZZ <br/>";
     elseif($i % 3 === 0):
         echo $i . " - Fizz <br/>";
     elseif($i % 5 === 0 ):
         echo $i . " - Buzz <br/>";
     else:
         echo $i . "<br/>";
     endif;
 endfor; */

 // For Each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;



include 'includes/footer.php';