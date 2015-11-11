<?php /* Smarty version Smarty-3.0.8, created on 2015-07-07 10:41:32
         compiled from "templates/default/catalog/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1574827252519397d84e3e91-56668393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f59db688fcba52468d3c0ffed06f65a22b6347a' => 
    array (
      0 => 'templates/default/catalog/order.tpl',
      1 => 1436214619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1574827252519397d84e3e91-56668393',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">

<form method="post" action="">
	<div style="float: left; font-size: 13px; font-weight: bold;">Номер заказа, ФИО заказчика:<br><input name="find" type="text" class="input"></div>
	<div style="float: left; margin-top: 15px; margin-left: 10px;"><input type="submit" class="large button blue" value="Фильтр"></div>
</form>
<div class="clear"></div>

<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title">ID</td>
	<td class="table_row_title">Заказ</td>
	<td class="table_row_title">Данные о заказчике</td>
	<?php if ($_smarty_tpl->getVariable('status')->value!="1"){?><td class="table_row_title"></td><?php }?>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<b>Способ доставки: <?php echo $_smarty_tpl->tpl_vars['item']->value['delivery'];?>
</b><br>
			<b>Способ оплаты: <?php echo $_smarty_tpl->tpl_vars['item']->value['pay'];?>
</b><br>
			ФИО: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br>
			E-mail: <b><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</b><br>
			Телефон: <b><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</b><br>
			Область: <?php echo $_smarty_tpl->tpl_vars['item']->value['region'];?>
<br>
			Город: <?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
<br>
			<?php if (($_smarty_tpl->tpl_vars['item']->value['address'])){?>Номер склада: <?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
<br><?php }?>
			<?php if (($_smarty_tpl->tpl_vars['item']->value['message'])){?>Примечание к заказу: <?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
<br><?php }?>
	</td>
	<?php if ($_smarty_tpl->getVariable('status')->value!="1"){?><td class="table_row" width="100"><a href="/magnit/order/done/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="large button red">Выполнено</a></td><?php }?>
</tr>
<?php }} ?>
</table>
</div>