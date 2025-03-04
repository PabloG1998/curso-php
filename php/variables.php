<?php 
    $var1 = 1;
    $String = "<h1>Hola</h1>";
    $array = array("Uno", "Dos", "Tres");
    $String2 = "<h1>Mundo</h1>";
    echo $String . " " . $String2;
    $username = "Fred Smith";
    echo $username;
    $current_user = $username;
    $y = 10;
    //$y += 2;
    //$y +=5;
    echo "<hr>";
    echo "<br>";
    echo "<h1>Variables Numericas</h1>";
    echo "<br>";
    $count = 17;
    $countFloat = 17.5; //variable con punto flotante
    echo "<h2> variable count: " . $count . "</h2>";
    echo "<h2> variable countFloat: " . $countFloat . "</h2>";
    $team = array("Bill", "Mary", "Mike", "Chris", "Anne"); //Declaracion de un array
    echo $team[3]; //Imprime la posición 3 del array "team"
    echo "<br>";
    echo "<hr>";
    echo "<h1>Arrays Bidimensionales</h1>";
    $arrayDosDimensiones = array(array(
        'x', '', 'o'),
        array('0', 'o', 'x'),
        array('x', 'o', ''));
    echo $arrayDosDimensiones[1][2]; 

if($y == 10) {
    echo $y;  
}
echo "<hr><br>";
echo "<h1>Concatenacion de Variables: </h1>";
echo "<hr>";
$info = '<h1>Esto preserva la cadena literal, escrito entre apostrofes </h1>';
echo "<h1>Esto es una variable concatenada: </h1>" . "<br>";
echo "<h1>Variable: " . "Esta semana " . $count . " vieron su perfil</h1>";
$msgs = 5;
//$bulletin .= $newsflash;
echo "<h1>You have " . $msgs . " messages</h1>"; 
echo "<hr>";
echo "<h1> Caracteres de escape: " . "</h1>";
echo "<hr>";
$text = //'My spelling's atroushus' //Sintaxis erronea
$text = '<h1> My spellin\'s still atroshus </h1>';
$text = "<h1>She wrote upon it, \"Return to sender\" . </h1>";
$heading = "<h1> Date\tName\tPayment </h1>";
echo $heading;
echo "<hr>";
echo $text;
$number = 12345 * 67890;
echo substr($number, 3,1);
?>