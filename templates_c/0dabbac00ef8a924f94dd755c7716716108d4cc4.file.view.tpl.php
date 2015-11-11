<?php /* Smarty version Smarty-3.0.8, created on 2015-08-04 21:17:44
         compiled from "templates/default/stock/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2469755c101c80f0bb6-08168891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dabbac00ef8a924f94dd755c7716716108d4cc4' => 
    array (
      0 => 'templates/default/stock/view.tpl',
      1 => 1438712262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2469755c101c80f0bb6-08168891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">

<?php if ($_smarty_tpl->getVariable('mod')->value=="stock"&&$_smarty_tpl->getVariable('act')->value=="view"){?>

<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title">ID</td>
	<td class="table_row_title"></td>
	<td class="table_row_title" width="60%">Заголовок</td>
	<td class="table_row_title">Остатки</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr bgcolor="#F9F9F9" onmouseover="style.backgroundColor='#e8e8e8'" onmouseout="style.backgroundColor='#F9F9F9'">
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td class="table_row"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/folder.gif" alt="Папки"></td>
	<td class="table_row_name maincat"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>	


</tr>
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('subview')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['items']->value['parent_id']){?>
		<tr bgcolor="#F9F9F9" onmouseover="style.backgroundColor='#e8e8e8'" onmouseout="style.backgroundColor='#F9F9F9'">
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
</td>
			<td class="table_row"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/folder.gif" alt="Папки"></td>
			<td class="table_row_name">&raquo; <a href="/magnit/stock/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['items']->value['num'];?>
)</td>	

		</tr>
	<?php }?>
<?php }} ?>
<?php }} ?>
</table>



<?php }else{ ?>
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>

	<td class="table_row_title">ID</td>
	<td class="table_row_title"></td>
	<td class="table_row_title" width="40%">Заголовок</td>
	<td class="table_row_title">Остаток</td>
	<td class="table_row_title">За все время</td>
	<td class="table_row_title">За год</td>
	<td class="table_row_title">За месяц</td>
	<td class="table_row_title"></td>
	<td class="table_row_title"></td>
	
	

</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr bgcolor="#F9F9F9" onmouseover="style.backgroundColor='#e8e8e8'" onmouseout="style.backgroundColor='#F9F9F9'">
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['month'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['alltime'];?>
</td>
	<td class="table_row_name">
		<form method="post" action="/magnit/stock/plus/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			<input name="count" type="text" value="" class="text_before_add">
			<input name="plus" type="submit" value="" class="plus">
		</form>
	</td>
	<td class="table_row_name">
		<form method="post" action="/magnit/stock/minus/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			<input name="count" type="text" value="" class="text_before_add">
			<input name="plus" type="submit" value="" class="minus">
		</form>
	</td>
</tr>
<?php }} ?>
</table`
<?php }?>

</div>
