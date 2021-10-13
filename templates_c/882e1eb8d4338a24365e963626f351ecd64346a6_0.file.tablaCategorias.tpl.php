<?php
/* Smarty version 3.1.39, created on 2021-10-13 20:24:19
  from 'D:\xampp\htdocs\tpe\templetes\tablaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672453036270_62000113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882e1eb8d4338a24365e963626f351ecd64346a6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tpe\\templetes\\tablaCategorias.tpl',
      1 => 1634149438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_61672453036270_62000113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<h2>Categorias Tabla</h2>

		<table>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
				<tr>
					<td><a href="mostrarTablaProductos/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo_categoria;?>
</td>

					<td>
						<a href="borrarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" id="borrarCategoria" class="btn">Borrar</a>	
						<a href="editarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" id="editarCategoria" class="btn">Editar</a>	
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		
		<div class="formCatEditar ocultaEditar" id="formEditar">
			<h2>Editar categorias</h2>
					<form action="editarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" method="POST"> 
						<label for="categoria">Editar categoria:</label>
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




<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
