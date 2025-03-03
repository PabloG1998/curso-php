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
?>