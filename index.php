<?php

echo("<br>");
echo("---------------------------------");
echo("<h1>Ejercicio 1</h1>");
echo("<br>");
$Suma;
$Resta;
$Multiplicion;
$Division;
$num1=555;
$num2=777;

$Suma=$num1 + $num2;
$Resta=$num1-$num2;
$Multiplicion=$num1*$num2;
$Division=$num1/$num2;
echo("La suma de $num1 + $num2 es igual a: $Suma");
echo("<br>");
echo("La Resta de $num1 - $num2 es igual a: $Resta");
echo("<br>");
echo("La Multiplicación de $num1 * $num2 es igual a: $Multiplicion");
echo("<br>");
echo("La División de $num1 / $num2 es igual a: $Division");

echo("<br>");
echo("---------------------------------");
echo("<h1>Ejercicio 2</h1>");
echo("<br>");
$peso=80;
$altura=1.80;
$imc=$peso/($altura*$altura);

if($imc <=18.4){
   echo("Usted tiene insuficiencia de peso");
}else if($imc >=18.5 && $imc <=24.9){
        echo("Usted tiene un peso normal");
    }else if($imc >=25 && $imc <=29.9){
        echo("Usted tiene sobrepeso");

    }else if($imc >=30 && $imc <=34.9){
        echo("Usted tiene obesidad tipo 1");

    }else if($imc >=35 && $imc <=39.9){
        echo("Usted tiene obesidad tipo 2");

    }else if($imc >=40){
        echo("Usted tiene obesidad de tipo 3");
    }


echo("<br>");
echo("---------------------------------");
echo("<h1>Ejercicio 3</h1>");
echo("<br>");
$cantZapatos=5;
$vlrZapatos=150000;
$total;
$totPagar;
$dscto;

if($cantZapatos > 5){
    $total=$cantZapatos*$vlrZapatos;
    $dscto=$total*40/100;
    $totPagar=$total-$dscto;
   echo("El valor a pagar por su compra es de: $totPagar");
}else if($cantZapatos > 3 && $cantZapatos <= 5){
        $total=$cantZapatos*$vlrZapatos;
        $dscto=$total*20/100;
        $totPagar=$total-$dscto;
        echo("El valor a pagar por su compra es de: $totPagar");
    }else if($cantZapatos ==3 ){
            $total=$cantZapatos*$vlrZapatos;
            $dscto=$total*10/100;
            $totPagar=$total-$dscto;
            echo("El valor a pagar por su compra es de: $totPagar");
        }else if($cantZapatos > 0  && $cantZapatos < 3 ){
                $total=$cantZapatos*$vlrZapatos;
                echo("El valor a pagar por su compra es de: $total");

    }


echo("<br>");
echo("---------------------------------");
echo("<h1>Ejercicio 4</h1>");
echo("<br>");
$numHorasw=36;
$vlrHorasw=20000;
$sueldo=0;
$cantHorasExtra=0;
$totExtra=0;
if($numHorasw <=40 ){
    $sueldo=$numHorasw*$vlrHorasw;
   echo("El sueldo del trabajador es de: $sueldo");
}else if($numHorasw > 40){
        $totExtra=$cantHorasExtra*25000;
        $sueldo=800000+$totExtra;
        echo("El sueldo del trabajador con horas extra es de: $sueldo");
    }
    echo("<br>");
    echo("---------------------------------");
    echo("<h1>Ejercicio 5</h1>");
    echo("<br>");
        $salpicon=array("dulce1"=>"Banano","dulce2"=>"Manzana","dulce3"=>"Durazno",
                "acido1"=>"Piña","acido2"=>"Naranja","acido3"=>"lulo");
                print_r($salpicon);
                echo("<br>");
        foreach($salpicon as $sabor => $frutas){
            echo($sabor."=>".$frutas);
            echo("<br>");
}
echo("---------------------------------");
echo("<br>");
?>