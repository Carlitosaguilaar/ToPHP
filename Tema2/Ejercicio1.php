<?php

//1-
    echo "Ejercicio 1:"."<br>"."Hello World"."<br>";

//2- 
    echo "<br>"."Ejercicio 2:"."<br>";

    $Mensaje="Hello World"."<br>";
    echo $Mensaje;

//3- 
    echo "<br>"."Ejercicio 3:"."<br>";

    $Int = 0;
    $Float = 0.5 ;
    $String = "Hola";

    var_dump($Int);
    echo "<br>";
    var_dump($Float);
    echo "<br>";
    var_dump($String);
    echo "<br>";


//4- 
    echo "<br>"."Ejercicio 4:"."<br>";

    $Siono = true; $Nadena = null;

    var_dump($Siono);
    echo "<br>";
    var_dump($Nadena);
    echo "<br>";

//5-

    echo "<br>"."Ejercicio 5:"."<br>";

    $Num1 = 2; $Num2 = 22;

    $Suma = $Num1+$Num2;
    echo "El resultado de la suma es: ".$Suma."<br>";

    $Resta = $Num1-$Num2;
    echo "El resultado de la resta es: ".$Resta."<br>";

    $Multi = $Num1*$Num2;
    echo "El resultado de la multiplicación es: ".$Multi."<br>";

    $Divi = $Num1/$Num2;
    echo "El resultado de la división es: ".$Divi."<br>";

    $Resto = $Num1&$Num2;
    echo "El resto de la división es: ".$Resto."<br>";

    $Potencia = pow($Num1, $Num2);

    echo "El resultado de la potencia es: ".$Potencia."<br>";

//6- 
    echo "<br>"."Ejercicio 6:"."<br>";

    $Cadena1 = "Viva ";
    $Cadena2 = "el Málaga"."<br>";
    echo $Cadena1.$Cadena2;

//7- 
    echo "<br>"."Ejercicio7:"."<br>";

    $Variable1 = "10";
    var_dump($Variable1);
    echo $Variable1."<br>";

    $Multiplicacionrara = $Variable1*2;
    var_dump($Multiplicacionrara);
    echo $Multiplicacionrara."<br>";

    $Multiplicacionrara2 = $Variable1*1.3;
    var_dump($Multiplicacionrara2);
    echo $Multiplicacionrara2."<br>";


    $VarString1="10 manzanas";
    $MultiplicacionStrings = $Variable1*$VarString1;
    var_dump($MultiplicacionStrings);
    echo $MultiplicacionStrings."<br>";

//8

    echo "<br>"."Ejercicio 8:"."<br>";

    $Boolean1=true;
    $Boolean2=false;

    $OchoA = $Boolean1&&$Boolean2;
    echo $OchoA."<br>";
    $OchoB = $Boolean1||$Boolean2; 
    echo $OchoB."<br>";
    echo $OchoA xor $OchoB."<br>";
    echo "<br>".!$OchoA;

    
?>
