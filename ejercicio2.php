<?php
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

$arreglo3 = array(
    "nombre" => "Jose",
    "Apellido" => "Fernandez",
    "Edad" => "17",
);
var_dump($arreglo3["nombre"]);
echo "<br><br><br>";

//Funciones

function operacion($num1,$num2,$operacion){
$resultado = 0;
if($operacion == "sumar"){
    $resultado = $num1 + $num2;
}
//elseif($operacion == "potencia"){
//    $resultado = $num1 * $num1     //Aqui no se como decirle que se multiplique las veces que le dice el num2
//}
return $resultado;
}

$mostrar = operacion(5, 7, "sumar");
echo $mostrar;
echo "<br>";
// $mostrar = operacion(2, 3, "potencia");
// echo $mostrar;


/*No me ha dado tiempo a terminar*/
?>