<?php 
    /*
        if( $page == "Home") {
            echo "Home";
        }elseif($page == "About") {
            echo "About";
        }elseif($page == "News") {
            echo "News";
        }elseif($page == "Login") {
            echo "Login";
        }elseif($page == "Links") {
            echo "Links";
        }else{
           echo "Enlace no reconocido";
        }
    */
    $page = null;

    switch ($page) {
        case 'Home':
            echo "Home";
            break;
        case "About":
            echo "About":
            break;
        case 'News':
            echo "News";
            break;
        case "Login":
            echo "Login"
            break;
        case "Links":
            echo "Links";
            break;
        default:
            echo "No se ha seleccionado nada";
            break;
    }
?>