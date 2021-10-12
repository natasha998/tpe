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

    function registrar(){
        //Creo la cuenta cuando venga en el POST
        // if(!empty($_POST['user'])&& !empty($_POST['password'])){
        //    $_POST['user'];
        //     $userPassword=$_POST['password'];
        // }else{
        //     echo "error";
        // }
        $userName = "admi@admi.com";
        $userPassword= password_hash("1234", PASSWORD_BCRYPT);         
        $this->UserModel->registrar($userName, $userPassword);
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->verLogin("Te deslogueaste!");
    }

    function login(){
        
        $userName = "admi@admi.com";
        $userPassword= password_hash("1234", PASSWORD_BCRYPT);         
        $this->UserModel->registrar($userName, $userPassword);
        $this->view->verLogin();
    }

    function verifyLogin(){
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->model->obtenerUser($user);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["user"] = $user;
                
                $this->view->mostrarHome();
            } else {
                $this->view->verLogin("Acceso denegado");
            }
        }
    }
}


