<?php 
$GLOBALS;
$_SERVER;
$_GET;
$_POST;
$_FILES;
$_COOKIE;
$_SESSION;
$_REQUEST;
$_ENV

//Accede la URL del usuario
$came_from = $_SERVER['HTTP_REFERER'];
//Forma de acceder a las superglobales sanitizadas
$came_from = htmlentities($_SERVER['HTTP_REFERER']);
?>