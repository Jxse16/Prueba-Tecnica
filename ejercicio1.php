<?php

//Variables y Constantes

$variable_sin_valor;

$booleano1 = 5;
echo
$booleano2 = 5;

define("PI",3.1416);
echo PI . "<br>";
define("nombre","Jose");
echo nombre . "<br>";
define("mi_num_fav",7);
echo mi_num_fav . "<br>";
echo "<br> <br>";

//Booleanos

$valor = $booleano1 == $booleano2;
echo $valor;
echo "<br>";
$valorDeNegacion = !$booleano1;
echo $valorDeNegacion;
echo "<br>";

 $valor2 = $booleano1 or $booleano2;
 echo $valor2;
 echo"<br>";

 $num6 = 6;
 $num9 = 9;
 $valor3 = $num6 === $num9;
 echo $valor3;
echo "<br> <br>";


//Operadores

$num1 = 2;
echo $num1 + 5;
echo "<br>";

$multiplicacion= mi_num_fav * $num1;
echo $multiplicacion;
echo "<br>";

$division= mi_num_fav / $num1;
echo $division;
echo "<br>";

$resto= 143 % 140;
echo $resto;
echo "<br>";
$resto2= 25 % 5;
echo $resto2;
echo "<br>";
echo "<br>";
echo "<br>";

//Bucles


 for ($Contarhasta10_2 = 0; $Contarhasta10_2 <= 10 ; $Contarhasta10_2++) { 
 echo $Contarhasta10_2;
}
echo "<br> <br>";
for ($sumarpares=0; $sumarpares <=10; $sumarpares++) { 
    if($sumarpares % 2 == 0){
        echo $sumarpares . " ";
    }
}
echo "<br> <br>";
$contarhasta10 = 0;
while ($contarhasta10 <= 10){
    echo $contarhasta10++;
}
echo "<br> <br> <br>";
//Arreglos

$arrayvacio;

$arrayNumeros = array(0,1,2,3,4,5,6,7,8,9);
var_dump($arrayNumeros) . "<br>";
echo "<br>";
echo "<br>";
$arraypares = array(0,2,4,6,8);
var_dump($arraypares) . "<br>";
echo "<br> <br>";
// $arraybidimensional = array((1,2,3)("a","b","c"));
// var_dump($arraybidimensional) . "<br>";
$arrayNumerosNeg = array(0,-1,-2,-3,-4,-5,-6,-7,-8,-9);
var_dump($arrayNumerosNeg) . "<br>";
echo "<br><br>";
?>