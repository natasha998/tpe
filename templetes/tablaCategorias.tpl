
{include file="./encabezado.tpl"}
		<h2>Categorias Tabla</h2>

		<table>
			{foreach from=$categorias item=$categoria}
				<tr>
					<td><a href="mostrarTablaProductos/{$categoria->id_categoria}">{$categoria->nombre_categoria}</td>
					<td>{$categoria->tipo_categoria}</td>

					<td>
						<a href="borrarCat/{$categoria->id_categoria}" id="borrarCategoria" class="btn">Borrar</a>	
						<button type="button" id="editarCategoria" class="btn">Editar</button>{*Es de tipo button xq necesito que muestre el form*}			
						<button type="button" id="agregarCategoria" class="btn">Agregar</button>{*Es de tipo button xq necesito que muestre el form*}
					</td>
				</tr>
			{/foreach}
		</table>
		<div class="formCatEditar ocultaEditar" id="formEditar">
			<h2>Editar categorias</h2>
					<form action="editarCat" method="POST"> 
						<label for="categoria">editarcategoria</label>
						<input type="text" id="nombre_c" name="nombre_c">
						<label for="tipo_c">Tipo de categoria</label>
						<input type="text" id="tipo_c" name="tipo_c">
						<input type="submit" value="Cargar Categorias">
					</form>
		</div>



		<div class="formCatAgregar ocultaAgregar" id="formEditar">
			<h2>Nueva categorias</h2>
			<form action="insertarCategorias" method="POST"> 
				<label for="categoria">Nombre de la categoria</label>
				<input type="text" id="nombre_c" name="nombre_c">
				<label for="tipo_c">Tipo de categoria</label>
				<input type="text" id="tipo_c" name="tipo_c">
				<input type="submit" value="Cargar Categorias">
			</form>
		</div>




{include file="./footer.tpl"}

