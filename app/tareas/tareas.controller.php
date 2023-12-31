<?php
if (!isset($path_components[$base_index + 1]))
    $path_components[$base_index + 1] = '';

switch ($path_components[$base_index + 1]) {
    case 'mi-lista':
        if (!checkSession()) {
            header("Location: /tareas/login ");
            exit();
        }
        require_once("./app/tareas/mi-lista/controller/mi-lista.controller.php");
        break;

    case 'registro':
        if (!checkSession()) {
            header("Location: /tareas/login ");
            exit();
        }
        require_once("./app/tareas/registro/controller/registro.controller.php");
        break;

    case 'completar':
        if (!checkSession()) {
            header("Location: /tareas/login ");
            exit();
        }

        if ( !isset( $query_params ) || !isset( $query_params['id'] ) ) {
            header("Location: /tareas/mi-lista ");
            exit();
        }
        include_once("./app/tareas/repository/tareas.repository.php");
        $tarea = TareasRepository::getInstance()->getTareaById( $query_params['id'] );

        if ( !$tarea ){
            header("Location: /tareas/mi-lista ");
            break;
        }

        $tarea->setStatus("Completado");

        if ( TareasRepository::getInstance()->editTarea( $tarea ) ) {
            header("Location: /tareas/mi-lista ");
        }
        break;

    case 'login':
        if (checkSession()) {
            header("Location: /tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/login/controller/login.controller.php");
        break;

    case 'registro_usuario':
        if (checkSession()) {
            header("Location: /tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/nuevo_usuario/controller/registro_usuario.controller.php");
        break;

    case 'recovery':
        if (checkSession()) {
            header("Location: /tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/recovery/controller/recovery.controller.php");
        break;
    
    case 'recovery-s2':
        if (checkSession()) {
            header("Location: /tareas/mi-lista ");
            exit();
        }
        require_once("./app/tareas/recovery/controller/recovery-step2.controller.php");
        break;

    case 'log-out':
        session_destroy();

    default:
        header("Location: /tareas/login");
        break;
}
