<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:39:24
  from 'D:\xampp\htdocs\tpe\templetes\productoUnico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168411c7c7d58_19080062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182aa5bed50d7a0a4bad31036a27b29f422b2adb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tpe\\templetes\\productoUnico.tpl',
      1 => 1634222361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6168411c7c7d58_19080062 (Smarty_Internal_Template $_smarty_tpl) {
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
		<tr>
			<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->nombre_p;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
			<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->precio_p;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</td>
			<td><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</td>
        </tr>
</table>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;
}
}
