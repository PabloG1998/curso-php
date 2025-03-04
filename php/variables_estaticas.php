<?php 
//Variable estatica con funcion
function estatico() {
    static $count = 0;
    echo $count;
    $count++;

    static $int = 0; //permitido
    static $int = 1+2; //Deshabilitado
    static $int = sqrt(144); //no permitido
}

?>