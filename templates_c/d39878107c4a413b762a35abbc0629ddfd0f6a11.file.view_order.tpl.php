<?php /* Smarty version Smarty-3.0.8, created on 2015-08-19 11:00:00
         compiled from "templates/default/clients/view_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1491555d43780536bc8-89976604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39878107c4a413b762a35abbc0629ddfd0f6a11' => 
    array (
      0 => 'templates/default/clients/view_order.tpl',
      1 => 1439966671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491555d43780536bc8-89976604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
	<div style="float:left;">Заказы <?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
 <?php echo $_smarty_tpl->getVariable('view')->value['surname'];?>
</div>
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title">ID</td>
	<td class="table_row_title">Заказ</td>
	<td class="table_row_title">Данные о заказчике</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_order')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr bgcolor="#F9F9F9" onmouseover="style.backgroundColor='#e8e8e8'" onmouseout="style.backgroundColor='#F9F9F9'">
	<td class="table_row" valign="top"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td class="table_row_name" valign="top"><?php echo $_smarty_tpl->tpl_vars['item']->value['order'];?>
</td>
	<td class="table_row_name" valign="top">
			<b>Номер заказа: <?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</b><br>
			<b>Дата заказа: <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</b><br>
	</td>

</tr>
<?php }} ?>
</table>







</div>