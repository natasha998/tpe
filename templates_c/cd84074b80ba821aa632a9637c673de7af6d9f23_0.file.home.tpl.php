<?php
/* Smarty version 3.1.39, created on 2021-10-12 15:54:43
  from 'D:\xampp\htdocs\tpe\templetes\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616593a3a17c09_04710317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd84074b80ba821aa632a9637c673de7af6d9f23' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tpe\\templetes\\home.tpl',
      1 => 1633470306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_616593a3a17c09_04710317 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['home']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h2>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

<?php }
}
