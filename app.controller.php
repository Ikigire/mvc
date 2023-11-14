<?php
    if ( !isset($path_components[$base_index]) ){
        $path_components[$base_index] = "";
    }
    switch ($path_components[$base_index]) {
        
        case 'practicajscss':
            require_once('./app/practicajscss/controller/practicajscss.controller.php');
            break;
        
        case 'registro':
            require_once('./app/registro/controller/registro.controller.php');
            break;

        case 'tareas':
            require_once("./app/tareas/tareas.controller.php");
            break;

        case 'app-paises':
            require_once("./app/paises/paises.controller.php");
            break;
        
        default:
            header("Location: /practicajscss");
            break;
    }