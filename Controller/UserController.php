<?php

require_once "./Model/userModel.php";
require_once "./View/LoginView.php";

class UserController{
    
     private $model;
     private $view; 

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function verlogin(){
        $this->view->verLogin();
    }

    function crearUsuario(){
        
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $userName = $_POST['user'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->registrar($userName, $userPassword);
            $this->view->verLogin("", "Usuario registrado");
        }

        var_dump("aca bebe" + $userPassword);
    }

    function verificarLogin(){
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $userName = $_POST['user'];
            $password = $_POST['password'];
     
            //Usuario base de datos
            $user = $this->model->obtenerUser($userName);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $userName->password)) {
                session_start();
                $_SESSION["user"] = $user;
                $this->view->mostrarHome();
            } else {
                $this->view->verLogin("No se pudo iniciar");
            }
        }
    }

    function cerrarSesion(){
        session_start();
        session_destroy();
        $this->view->verLogin("Finalizo la sesion");
    }
}
