<pre>
<?php
 
    $ent1 = $_GET['entrada1'];
    $ent2 = $_GET['entrada2'];
    $ent3 = $_GET['entrada3'];
/*
    echo "Ejercicio 1. ";

    if (strtolower($ent1)=="true") {        
        echo "verdadero";       //Devuelve verdadero si se introduce=true
    } 
    else if (strtolower($ent1)=="false") {  //Devuelve falso si se introduce false
        echo "falso";
    } 
    else {
        echo "Introduce un booleano de verdad, payaso";
    }

    //Otra forma

    function str_to_bool($ent) {
        $Bool = Array(
            "true" => true,
            "false" => false
        );
    
 
        return $Bool[$ent];
 
    }
        
    function str_to_bool2($ent) {
 
        return Array(
                    "true" => true,
                    "false" => false
                )[$ent];
 
    }
 
    $b = str_to_bool($ent2);
    
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
        
        if (strtolower($ent1) == "gato") {
            echo "Se ha seleccionado el gato";
        }
        
        else if (strtolower($ent1) == "perro") {
            echo "Se ha seleccionado el perro";
        }
    
        else if (strtolower($ent1) == "loro") {
            echo "Se ha seleccionado el loro";
        }
    
        else{
            echo "No se ha seleccionado ni perro, ni gato, ni loro";
        }
        
    } else {
        echo "Esto son números, payaso";
        
    }

    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 4. ";

    switch (strtolower($ent1)) {
        case "gato":
            echo "Se ha seleccionado el gato";
            break;
        case "gato":
            echo "Se ha seleccionado el perro";
            break;
        case "loro":
            echo "Se ha seleccionado el loro";
            break;
        default:
        echo "No se ha seleccionado ni perro, ni gato, ni loro";
            break;
    }

//Otra forma

    switch (strtolower($ent1)){
 
        case 'gato' : 
        case 'perro' : 
        case 'loro' : 
            echo 'Se ha seleccionado el '.$ent1; 
            break;
        default: echo 'No se ha seleccionado ni perro, ni gato, ni loro';
    }
    

    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 5. ";

    switch ($ent2) {
        case "+":
            $Suma = ($ent1 + $ent3);
            echo $Suma;
            break;
        case "-":
            $Resta = ($ent1 - $ent3);
            echo $Resta;
            break;
        case "*":
            $Multip = ($ent1 * $ent3);
            echo $Multip;
            break;
        case "/":
            $Division = ($ent1 / $ent3);
            echo $Division;
            break;
        default:
        echo "No se puede resolver esta operación";
            break;
    }

    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 6. ";

    if ((strtolower($ent1)==true&&strtolower($ent3)==true)||(strtolower($ent1)==false&&strtolower($ent3)==false)) {
        echo "Si";
    }
    else{
        
        echo "No";
    }
    echo "<br>";

    if (strtolower($ent1)==true||strtolower($ent3)==true){
        echo "Si";
    }
    else{
        echo "No";
    }
    echo "<br>";

    if ((strtolower($ent1)==true&&strtolower($ent3)==true)||(strtolower($ent1)==false&&strtolower($ent3)==false)) {
        echo "No";
    }
    else{
        echo "Si";
    }

    if (!strtolower($ent1)==true){
        echo "No"."<br>";
    }
    else {
        echo "Si"."<br>";

    }
    if (!strtolower($ent3)==true){
        echo "No"."<br>";
    }
    else {
        echo "Si"."<br>";
    }
*/
    echo "<br>". "<br>". "<br>". "<br>"."Ejercicio 7. ";

    $frase = explode(" ", $ent1);

    var_dump($frase);

?>

</pre>