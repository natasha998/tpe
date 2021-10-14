<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:49:16
  from 'D:\xampp\htdocs\tpe\templetes\userAdmi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616889bc8f42a1_55300273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '340e4d955acec5c3d5a8fe2c917d00841405fc45' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tpe\\templetes\\userAdmi.tpl',
      1 => 1634240939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./encabezado.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_616889bc8f42a1_55300273 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:./encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

  <h4>Iniciar</h4>
        <form action="confirmarLogin" method="POST">
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="userIn">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password">
            <input type="submit" value="Iniciar">
        </form>
        
    <h4>Registrar</h4>
    <form action="registrar" method="POST">
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form>


    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p>

    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>




<?php }
}
