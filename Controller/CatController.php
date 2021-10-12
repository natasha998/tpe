<?php

require_once "./View/HomeView.php";
require_once "./Helpers/AuthHelper.php";

require_once "./Model/CatModel.php";
require_once "./View/CatView.php";


class CatController{
    private $CatModel;
    private $CatView;

    private $viewHome;

    private $authHelper; 



    function __construct(){
        $this->CatModel= new  CatModel();
        $this->CatView = new  CatView();

        $this->authHelper = new AuthHelper();

        $this->viewHome = new HomeView();// modificar


        }


        //Categorias
    function mostrarTablaCategoria(){
        $categorias = $this->CatModel->valoresTablaCategoria();
        $this->CatView->mostrarTablaCategorias($categorias);
    }

 
    //Usuario administrador

    function insertarCategorias(){
        
        $this->authHelper->checkLoggedIn();

        if(isset($_POST["nombre_c"])&&isset($_POST["tipo_c"])){
            if(!empty($_POST["nombre_c"])&&!empty($_POST["tipo_c"])){
                $nombre_C = $_POST["nombre_c"];
                $tipo_c = $_POST["tipo_c"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->CatModel->insertarCategoriasDB($nombre_C, $tipo_c);
        $this->CatView->mostrarCategorias();
    }


    
    function editarCat($id){
        
        $this->authHelper->checkLoggedIn();

        if(isset($_POST["nombre_c"])&&isset($_POST["tipo_c"])){
            if(!empty($_POST["nombre_c"])&&!empty($_POST["tipo_c"])){
                $nombre_C = $_POST["nombre_c"];
                $tipo_c = $_POST["tipo_c"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->CatModel->editarCategoriasDB($id,$nombre_C,$tipo_c);
        $this->CatView->mostrarCategorias();

    }

    function borrarCat($id){
        
        $this->authHelper->checkLoggedIn();
         
        $this->CatModel->borrarCategoriaDB($id);
        $this->CatView->mostrarCategorias();
    }


      //Home
      function mostrarHome(){
        $this->viewHome->mostrarHome();
    }

    function mostarContacto(){
        echo "about contacto";
    }


}