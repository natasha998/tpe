<?php
/* Smarty version 3.1.39, created on 2021-10-12 15:54:47
  from 'D:\xampp\htdocs\tpe\templetes\tablaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616593a7225631_10560743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '010f1338fb22aa26e40394f7738ab1bf425332f4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tpe\\templetes\\tablaProductos.tpl',
      1 => 1634046635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_616593a7225631_10560743 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

	<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h2>

	<table>
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

			<tr>
				<td><a href="productoUnico/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" ><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->nombre_p;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</a></td>
				<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->precio_p;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
				<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</td>
				<td>
					<a href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" id="borrarProduto" class="btn">Borrar</a>	
					<button type="button" id="editarProd" class="btn">Editar</button>			
					<button type="button" id="agregarProd" class="btn">Agregar</button>				</td>
			</tr>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>

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
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>

			<option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" name="categoria"><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</option>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>

			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>


<div class="ocultaEditarProd">
	<h2>Editar  Productos</h2>

	<form action="editarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" method="POST"> 
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
		<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>

			<option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" name="categoria"><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</option>
		<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>

			</select>
		<input type="submit" value="Cargar Productos">
	</form>
</div>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>


<?php }
}
