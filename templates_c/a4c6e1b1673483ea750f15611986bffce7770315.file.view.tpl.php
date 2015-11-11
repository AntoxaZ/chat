<?php /* Smarty version Smarty-3.0.8, created on 2015-07-07 10:47:49
         compiled from "templates/default/menu/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144727013251893cf3e91cf8-80473733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c6e1b1673483ea750f15611986bffce7770315' => 
    array (
      0 => 'templates/default/menu/view.tpl',
      1 => 1436214683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144727013251893cf3e91cf8-80473733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form method="post" action="/magnit/menu/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title">Заголовок</td>
	<td class="table_row_title">Url</td>
	<td class="table_row_title">Видимость</td>
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
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['is_pub'];?>
</td>
	<td class="table_row"><a href="/magnit/menu/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
	<td class="table_row"><a onClick="conf('/magnit/menu/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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