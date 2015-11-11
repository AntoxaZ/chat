<?php /* Smarty version Smarty-3.0.8, created on 2015-11-11 00:45:11
         compiled from "templates/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934356427377cd64f5-28504417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14fd349020942bdb8904f01965cd756141b5271' => 
    array (
      0 => 'templates/default/index.tpl',
      1 => 1447195509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934356427377cd64f5-28504417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<br>
<h1>Комнаты чата</h1>
<table class="table_view" cellspacing="2" cellpadding="2">
	<tr>
		<td>Id</td>
		<td>Имя комнаты</td>
		<td>Дата создания</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
</td>
		<td><a href="chat/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['items']->value['create_date'];?>
</td>
		<?php if ($_smarty_tpl->getVariable('user_is_admin')->value==1){?><td><a href="/rooms/delete/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/">Удалить</a></td><?php }?>
	</tr>
	<?php }} ?>
	<?php if ($_smarty_tpl->getVariable('user_is_admin')->value==1){?>
	<tr>
		<td></td>
		<td>Название комнаты</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<form method="post" action="/rooms/create_room/">
		<td></td>
		<td><input type="text" name="name_room"></td>
		<td></td>
		<td><input class="btn btn-info" type="submit" value="Создать"></td>
		</form>
	</tr>
	<?php }?>
</table>

</div>