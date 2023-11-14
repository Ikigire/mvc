<?php

    if ( !isset($path_components[$base_index + 1]) )
        $path_components[$base_index + 1] = 'por-continente';

    switch ($path_components[$base_index + 1]) {
        case 'por-continente':
            require_once("./app/paises/por-continente/view/por-continente.view.php");
            break;

        case 'por-pais':
            require_once("./app/paises/por-pais/view/por-pais.view.php");
            break;

        case 'ver-pais':
            require_once("./app/paises/ver-pais/view/ver-pais.view.php");
            break;
        
        default:
            header("Location: /app-paises/por-continente");
            exit();
            // header("HTTP/1.1 404 Not Found");
            break;
    }