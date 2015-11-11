<?php /* Smarty version Smarty-3.0.8, created on 2015-07-12 17:51:17
         compiled from "templates/default/clients/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747055a27ee5e8d003-87281816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c32b4519b5f9a23e696b6f836d1aa49b61210c' => 
    array (
      0 => 'templates/default/clients/view.tpl',
      1 => 1436712675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747055a27ee5e8d003-87281816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form method="post" action="/magnit/clients/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title">Логин</td>
	<td class="table_row_title">Имя</td>
	<td class="table_row_title">Фамилия</td>
	<td class="table_row_title">Email</td>
	<td class="table_row_title">Телефон</td>
	<td class="table_row_title">Категория</td>
	<td class="table_row_title">Дата последнего посещения</td>
	<td class="table_row_title">Дата регистрации</td>
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
	<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['logdate'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['regdate'];?>
</td>	
	<td class="table_row"><a href="/magnit/clients/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
	<td class="table_row"><a onClick="conf('/magnit/clients/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
</tr>
<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
</div>