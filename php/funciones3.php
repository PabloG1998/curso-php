<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");

  /*  $temp = "La fecha es: ";
    echo longDate(time());
    
    function longDate($timestamp) {
        return $temp . date("l F jS Y", $timestamp);
    }
    */
    /*
    $temp = "The date is: ";
    echo $temp . longDate(time());
    function longDate($timestamp) {
        return date("l F jS Y");

    }
    */
    $temp = "The date is: ";
    echo longDate($temp, time());
    function longDate($text, $timestamp) {
        return $text . date("l F jS Y", $timestamp);
    }
?>