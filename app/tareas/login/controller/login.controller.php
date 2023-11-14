<?php

switch ($request_method) {
    case 'GET':
        require_once("./app/tareas/login/view/login.view.php");
        break;

    case 'POST':
        require_once("./app/tareas/repository/usuario.repository.php");

        $user_name  = $_POST['usuario'];
        $password   = $_POST['password'];

        $usuario = new Usuario( 0, $user_name, $password);

        $ur = UsuariosRepository::getInstance();

        $usuario = $ur->loginUsuario($usuario);

        if ( $usuario->getId() == 0 ) {
            header("Location: /tareas/login?error=El usuario o contraseña son incorrectos");
            break;
        }

        $_SESSION['userId'] = $usuario->getId();
        $_SESSION['user_name'] = $usuario->getUsuario();

        header("Location: /tareas/mi-lista");
        break;

    default:
        # code...
        break;
}
