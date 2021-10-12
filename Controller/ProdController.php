<?php

require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

require_once "./Helpers/AuthHelper.php";

class ProdController{
    private $ProdModel;
    private $ProdView;

    private $authHelper;


    function __construct(){
        
        $this->ProdModel = new ProdModel();
        $this->ProdView = new ProdView();

        $this->authHelper = new AuthHelper();
    }

       // Productos
    function tablaProducto(){
        $productos = $this->ProdModel->tablaProductoModel();
        $this->ProdView->mostrarTablaCompleta($productos);
    }

    function mostrarTablaProductos($id){
        $productos = $this->ProdModel->valoresTablaProducto($id);
        $this->ProdView->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->ProdModel->productoDetalle($id_p);
        $this->ProdView->verProducto($producto);
    }
    //Productos Administrador

    function agregarProducto(){
        
        $this->authHelper->checkLoggedIn();

        if(isset($_POST["nombre"])&&(isset($_POST["marca"])&&isset($_POST["precio"])&&isset($_POST["stock"])&&isset($_POST["categoria"]))){
            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
         }else{
             echo "Error";
         }
        }else{
            echo "Error";
        }
        $this->ProdModel->agregarProducto($nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        $this->ProdView->mostrarProductos();
        
    } 

    // Usuario administrador

    
    function editarProd($id){
        
        $this->authHelper->checkLoggedIn();

            if(!empty($_POST["nombre"])&&(!empty($_POST["marca"])&&!empty($_POST["precio"])&&!empty($_POST["stock"])&&!empty($_POST["categoria"]))){
                $nombre_p = $_POST["nombre"];
                $marca_p = $_POST["marca"];
                $precio_id = $_POST["precio"];
                $stock_id = $_POST["stock"];
                $id_categoria = $_POST["categoria"];
         }else{
             echo "Error";
         }
        $this->ProdModel->editarProducto($id,$nombre_p,$marca_p,$precio_id,$stock_id,$id_categoria);
        header("Location: ".BASE_URL."productos"); 

    }

    function borrarProd($id){

        
        $this->authHelper->checkLoggedIn();
        
        $this->ProdModel->eliminarProducto($id);
        header("Location: ".BASE_URL."productos"); 
        
    }

}