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

$valorDeNegacion = !$booleano1;
echo $valorDeNegacion;
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
for ($sumarpares=0; $sumarpares <10; $sumarpares++) { 
    if($sumarpares % 2 == 0){
        echo $sumarpares . " ";
    }
}
echo "<br> <br>";
$contarhasta10 = 0;
while ($contarhasta10 <= 10){
    echo $contarhasta10++;
}

?>