<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");
function longDate($timestamp) {
    return date("l F jS Y", $timestamp);
}
echo longDate(time());
//Imprime la fecha de hace 17 días
echo "<br>";
echo longDate(time() - 17 * 24 * 60 * 60);

?>