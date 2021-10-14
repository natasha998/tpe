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
    }

    function verificarLogin(){

        if (!empty($_POST['userIn']) && !empty($_POST['password'])) {
            $userName = $_POST['userIn'];
            $passwordUser = $_POST['password'];

            
            //Usuario base de datos
            $user = $this->model->obtenerUser($userName);
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($passwordUser, $user->pass_user)) {
                session_start();
                $_SESSION["userIn"] = $user;
                $this->view->mostrarHome();
                var_dump("Inicio");

            } else {
                $this->view->verLogin("No se pudo iniciar");
                var_dump($user->email_pass + $user->pass_user);
                var_dump("no inicio");
            }

        }
    }

    function cerrarSesion(){
        session_start();
        session_destroy();
        $this->view->verLogin("Finalizo la sesion");
    }
}
