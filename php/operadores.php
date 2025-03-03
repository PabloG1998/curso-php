<?php 
//echo 6 + 2;

$num1 = 8;
$num2 = 7;
echo "Incremento de la variable en uno: " . $num1++; // 9
echo "<br><hr>";
echo "Decremento de la variable en uno: " . $num1--; // 6
echo "<br><hr>";
echo "Suma de ambas variables: " . $num1 + $num2; //15
echo "<br><hr>";
echo "Resta entre ambas variables: " . $num1 - $num2; //1
echo "<br><hr>";
echo "Multiplicacion entre ambas variables: " . $num1 * $num2; //56
echo "<br><hr>";
echo "Division entre ambas variables: " . $num1 / $num2; //0,87
echo "<br><hr>";
echo "Módulo o resto entre ambas variables: " . $num1 % $num2;
echo "<br><hr>"; 
echo "Exponente entre ambas variables: " . $num1 ** $num2;
echo "<br><hr>";
echo "<br>";
echo "<h1>Operadores de Asignacion: </h1>";

$count = 6;
$count = $count + 1;
//O lo que es igual
$count += 1; //$count = $count + 1;
echo $count;
echo "<br><hr>";
echo "Operadores logicos:";
echo "<hr>";
$hour = 12;
if ($hour >= 12 && $hour < 14) {
    echo "Almorzar";
}else{ 
    echo "Cenar";
}

?>