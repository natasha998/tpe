<?php
require_once "./Model/CatModel.php";// necesito mostrar las categorias cuando edito el prod y cuando agrego uno nuevo

require_once "./Model/ProdModel.php";
require_once "./View/ProdView.php";

require_once "./Helpers/AuthHelper.php";

class ProdController{
    private $ProdModel;
    private $ProdView;
    
    private $CatModel;

    private $authHelper;


    function __construct(){
        $this->ProdModel = new ProdModel();
        $this->ProdView = new ProdView();

        $this->CatModel= new  CatModel();

        $this->authHelper = new AuthHelper();
    }

    // Productos

    function tablaProducto(){
        $productos = $this->ProdModel->valTablaProductos();
        $categorias = $this->CatModel->valTablaCategorias();
        $this->ProdView->mostrarTablaCompleta($productos,$categorias);
    }// necesito mostrar la categoria de los productos 

    function mostrarTablaProductosByCat($id){
        
        $productos = $this->ProdModel->valTablaProdByCat($id);
        $this->ProdView->mostrarTablaProductos($productos);
    }
    
    function verProducto($id_p){
        $producto = $this->ProdModel->productoDetalle($id_p);
        $categoria = $this->CatModel->valTablaCategorias();
        $this->ProdView->verProducto($producto,$categoria);
    }


    ///////////////////// Usuario Administrador//////////////////////////////////////

    function agregarProducto(){
        
        //$this->authHelper->checkLoggedIn();

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

    
    function editarProd($id){
        
        //$this->authHelper->checkLoggedIn();

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

       // $this->authHelper->checkLoggedIn();
        
        $this->ProdModel->eliminarProducto($id);
        header("Location: ".BASE_URL."productos"); 
        
    }

}