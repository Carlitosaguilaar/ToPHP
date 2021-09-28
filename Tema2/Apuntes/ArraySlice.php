<?php
$entrada = array("a", "b", "c", "d", "e", "f", "g", "h", "i");

$salida = array_slice($entrada, 2);      // Devuelve el array empezando en la posicion 2 (c)
print_r($salida);
echo "<br>"."<br>";
$salida = array_slice($entrada, -3, 1);  // Devuelve la tercera posición empezando por el final, solo devuelve un valor
print_r($salida);
echo "<br>"."<br>";

$salida = array_slice($entrada, 0, 5);   // Devuelve todas las posiciones desde la 0 hasta la 5 (desde la "a" a la "e")
print_r($salida);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



print_r(array_slice($entrada, 4, 1));       //Sin el true, va a reordenar el array
echo "<br>";
print_r(array_slice($entrada, 4, 1, true)); //El true sirve para respetar la posición



print_r(array_slice($entrada, 4, -1));       //Saca por pantalla desde la posición 4 hasta el final, sin respetar la posición original
echo "<br>";
print_r(array_slice($entrada, 4, -1, true)); //Saca por pantalla desde la posicion 4 hasta el final, respetando la posición original

?>