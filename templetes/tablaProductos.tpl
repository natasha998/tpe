{{include file="./encabezado.tpl"}}
	<h2>{{$titulo}}</h2>

	<table>
		{{foreach from=$productos item=$producto}}
			<tr>
				<td><a href="productoUnico/{$producto->id_producto}" >{{$producto->nombre_p}}</a></td>
				<td>{{$producto->precio_p}}</td>
				<td>{{$producto->id_producto}}</td>
				<td>
					<a href="borrarProd/{$producto->id_producto}" id="borrarProduto" class="btn">Borrar</a>	
					<a href="editarProd/{$producto->id_producto}" id="editarProduto" class="btn">Editar</a>	
				</td>
			</tr>
		{{/foreach}}
	</table>

<div class="ocultaAgregarProd">
	<h2>Agragar Productos</h2>
	<form action="agregarProducto" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock">
		<label for="categoria">Categoria:</label>
		<select name="categoria" id="categoria_prod">
		{{foreach from=$categorias item=$categoria}}
			<option value="{{$categoria->id_categoria}}" name="categoria">{{$categoria->nombre_categoria}}</option>
		{{/foreach}}
			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>


{*Si productos es vacio no deberia mostrar la funcion editar*}

<div class="ocultaEditarProd">
	<h2>Editar  Productos</h2>

	<form action="editarProd/{$producto->id_producto}" method="POST"> 
		<label for="producto">Nombre del producto</label>
		<input type="text" id="nombre_prod" name="nombre">
		<label for="marca">Marca</label>
		<input type="text" id="marca_prod" name="marca">
		<label for="precio">Precio</label>
		<input type="number" id="precio_prod" name="precio">
		<label for="stock">Stock</label>
		<input type="number" id="stock_prod" name="stock">
		<label for="categoria">Categoria:</label>
		<input type="text" id="id_categoria" name="categoria" value="a la categoria que pertenece">
		<input type="submit" value="Cargar Productos">
	</form>
</div>
{{include file="./footer.tpl"}}

