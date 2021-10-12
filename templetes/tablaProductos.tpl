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
					<button type="button" id="editarProd" class="btn">Editar</button>{*Es de tipo button xq necesito que muestre el form*}			
					<button type="button" id="agregarProd" class="btn">Agregar</button>{*Es de tipo button xq necesito que muestre el form*}
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
		{{foreach from=$productos item=$producto}}
			<option value="{{$producto->id_categoria}}" name="categoria">{{$producto->id_categoria}}</option>
		{{/foreach}}
			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>


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
		<select name="categoria" id="categoria_prod">
		{{foreach from=$productos item=$producto}}
			<option value="{{$producto->id_categoria}}" name="categoria">{{$producto->id_categoria}}</option>
		{{/foreach}}
			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>
{{include file="./footer.tpl"}}

