<?php
require_once './libs/Smarty.class.php';

class LoginView{

    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }


    function showLogin($error = "", $registrado = ""){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('exito', $registrado);
        $this->smarty->display('templetes/userAdmi.tpl');
    }
    
    function mostrarHome(){
        $this->smarty->assign('home', 'Home');
        $this->smarty->display('templetes/tablaCategorias.tpl');
    }
}


