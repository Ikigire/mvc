<?php
    if ( !isset($path_components[2]) )
        $path_components[2] = '';
        
    switch ($path_components[2]) {
        case '':
            header("Location: /mvc/tareas/mi-lista");
            break;
            
        case 'mi-lista':
            require_once("./app/tareas/mi-lista/controller/mi-lista.controller.php");
            break;

        case 'registro':
            require_once("./app/tareas/registro/controller/registro.controller.php");
            break;

        case 'completar':
            // require_once("./app/tareas/registro/controller/registro.controller.php");
            echo "<h1>Hola</h1>";
            break;
        
        default:
            header("Location: /mvc/tareas");
            break;
    }