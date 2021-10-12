<?php

require_once './libs/Smarty.class.php';


class HomeView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarHome(){

        $this->smarty->assign('home', 'Home');
        $this->smarty->display('templetes/home.tpl');
    }
    
}