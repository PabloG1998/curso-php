<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");
function longDate($timestamp) {
    $temp = date("l F jS Y", $timestamp);
    return "The date is: $temp";
}
echo longDate(time());
?>