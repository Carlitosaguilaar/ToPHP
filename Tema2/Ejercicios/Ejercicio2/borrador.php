<?php
 
    $ent1 = $_GET['entrada1'];
    $ent1=strtoupper($ent1);
    $ent2 = $_GET['entrada2'];
    $ent3 = $_GET['entrada3'];

    echo "Ejercicio 1. ";

    if ($ent1=="TRUE") {
        echo "verdadero";
    } 
    else if ($ent1=="FALSE") {
        echo "falso";
    } 
    else {
        echo "Introduce un booleano de verdad, payaso";
    }
    
    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 2. ";

    if (is_numeric($ent1)) {
        
        if ($ent1 >100) {
            echo "El número es mayor de 100";
        }
        
        else if ($ent1 >50 && $ent1 <=100) {
            echo "El número está entre 50 y 100";
        }
    
        else if ($ent1 >=25 && $ent1 <=50) {
            echo "El número está entre 25 y 50";
        }
    
        else if ($ent1 <25){
            echo "El número es menor de 25";
        }
        
    } else {
        echo "Esto son letras, payaso";
        
    }

    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 3. ";

    
    if (is_string($ent1)) {
        
        if ($ent1 == "GATO") {
            echo "Se ha seleccionado el gato";
        }
        
        else if ($ent1 == "PERRO") {
            echo "Se ha seleccionado el perro";
        }
    
        else if ($ent1 == "LORO") {
            echo "Se ha seleccionado el loro";
        }
    
        else{
            echo "No se ha seleccionado ni perro, ni gato, ni loro";
        }
        
    } else {
        echo "Esto son números, payaso";
        
    }

    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 4. ";

    switch ($ent1) {
        case "GATO":
            echo "Se ha seleccionado el gato";
            break;
        case "PERRO":
            echo "Se ha seleccionado el perro";
            break;
        case "LORO":
            echo "Se ha seleccionado el loro";
            break;
        default:
        echo "No se ha seleccionado ni perro, ni gato, ni loro";
            break;
    }



    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 5. ";


    switch ($ent2) {
        case v1:
            $Suma = ($ent1 + $ent3);
            echo $Suma;
            break;
        case v2:
            $Resta = ($ent1 - $ent3);
            echo $Resta;
            break;
        case v3:
            $Multip = ($ent1 * $ent3);
            echo $Multip;
            break;
        case v4:
            $Division = ($ent1 / $ent3);
            echo $Division;
            break;
        default:
        echo "No se puede resolver esta operación";
            break;



    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 6. ";







    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 7. ";





  /*




Ejercicio 6.- 

Recibe 2 valores boolean y una operación lógica

and
or
xor
niega una de ellas

Sobre ellas realiza las siguientes operaciones lógicas mostrando por pantalla el resultado:

*/
?>