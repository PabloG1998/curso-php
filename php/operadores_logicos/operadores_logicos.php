<?php 
//Operadores lógicos
/*
    And
    OR
    XOR
    ! (NOT)
    ejemplo: 

    variable1=1, variable2=0
    echo (variable1 AND variable2)
    echo (variable1 or variable2)
    echo (variable1 xor variable2)
    echo !variable1
*/
    $a = 1;
    $b = 0;
    echo "Variable AND: " . ($a and $b) . "<br>";
    echo "Variable or: " . ($a or $b) . "<br>";
    echo "variable xor: " . ($a xor $b) . "<br>";
    echo "variable negacion: " . !$a; 
?>