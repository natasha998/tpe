
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/myStyle.css" media="screen" />
   
    <title>Document</title>
</head>
<body>
    <div class="content">
        <header>
            <img src="media/1.png" alt="">
            <nav> 
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="categorias">Categorias</a>
                    {*    <ul class="sub-lista">
                            <li><a href="productos">Ver todos los productos</a></li>
                            {{foreach from=$categorias item=$categoria}}
                                <li><a href="mostrarTablaProductos/{$categoria->id_categoria}">{$categoria->nombre_categoria}</li>
                            {{/foreach}}
                            
                            </li>
                    </ul>
                 
                    <li><a href="about">About</a></li> *}
                    <li><a href="productos">Productos</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </nav>
        </header>

