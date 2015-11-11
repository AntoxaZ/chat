<?php /* Smarty version Smarty-3.0.8, created on 2015-07-07 10:41:35
         compiled from "templates/default/catalog/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112059675853aa61b96b8286-79021487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f9cb12f9fd9906a9eb4c2b0d847032b76329b9' => 
    array (
      0 => 'templates/default/catalog/view.tpl',
      1 => 1436214618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112059675853aa61b96b8286-79021487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">

<?php if ($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="view"){?>
<form method="post" action="/magnit/catalog/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title"></td>
	<td class="table_row_title" width="60%">Заголовок</td>
	<td class="table_row_title">Сортировка</td>
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
	<td class="table_row"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/folder.gif" alt="Папки"></td>
	<td class="table_row_name maincat"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>	
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['is_pub'];?>
</td>
	<td class="table_row"><a href="/magnit/catalog/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['parent_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
	<td class="table_row"><a onClick="conf('/magnit/catalog/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
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
			<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"></td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
</td>
			<td class="table_row"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/folder.gif" alt="Папки"></td>
			<td class="table_row_name">&raquo; <a href="/magnit/catalog/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['items']->value['num'];?>
)</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['items']->value['sort'];?>
</td>	
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['items']->value['is_pub'];?>
</td>
			<td class="table_row"><a href="/magnit/catalog/edit/<?php echo $_smarty_tpl->tpl_vars['items']->value['parent_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/catalog/delete/<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }?>
<?php }} ?>
<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="photos"){?>
<form method="post" action="/magnit/photos/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title" width="40%">Название</td>	
	<td class="table_row_title" width="40%">Изображение</td>
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
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
</td>
			<td class="table_row"><a href="/magnit/photos/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/photos/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="city"){?>
<form method="post" action="">
	<div style="float: left; font-size: 13px; font-weight: bold;">Область:<br>
	<select name="find" class="select">
		<option value="0">Выбрать область</option>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('region')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
	<?php }} ?>
	</select>	
	</div>
	<div style="float: left; margin-top: 15px; margin-left: 10px;"><input type="submit" class="large button blue" value="Фильтр"></div>
</form>
<div class="clear"></div>
<p align="left" style="margin-bottom: 5px">
<a href="/magnit/city/add/" class="large button blue">Добавить</a>
</p>
<form method="post" action="/magnit/city/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title" width="40%">Город</td>	
	<td class="table_row_title" width="40%">Область</td>
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
			<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
"></td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['region'];?>
</td>
			<td class="table_row"><a href="/magnit/city/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['region_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/city/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="address"){?>
<form method="post" action="">
	<div style="float: left; font-size: 13px; font-weight: bold;">Город:<br><input name="find" type="text" class="input"></div>
	<div style="float: left; margin-top: 15px; margin-left: 10px;"><input type="submit" class="large button blue" value="Фильтр"></div>
</form>
<div class="clear"></div>
<p align="left" style="margin-bottom: 5px">
<a href="/magnit/address/add/" class="large button blue">Добавить</a>
</p>
<form method="post" action="/magnit/address/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title" width="40%">Доставка</td>
	<td class="table_row_title" width="40%">Адрес</td>	
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
			<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['address_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['address_id'];?>
"></td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['address_id'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['delivery'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<td class="table_row"><a href="/magnit/address/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['address_id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/address/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['address_id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form><?php }elseif($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="delivery"){?>
<form method="post" action="">
	<div style="float: left; font-size: 13px; font-weight: bold;">Город:<br><input name="find" type="text" class="input"></div>
	<div style="float: left; margin-top: 15px; margin-left: 10px;"><input type="submit" class="large button blue" value="Фильтр"></div>
</form>
<div class="clear"></div>
<p align="left" style="margin-bottom: 5px">
<a href="/magnit/delivery/add/" class="large button blue">Добавить</a>
</p>
<form method="post" action="/magnit/delivery/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title" width="40%">Город</td>
	<td class="table_row_title" width="40%">Доставка</td>	
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
			<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
"></td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<td class="table_row"><a href="/magnit/delivery/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/delivery/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="dostavka"){?>
<p align="left" style="margin-bottom: 5px">
<a href="/magnit/dostavka/add/" class="large button blue">Добавить</a>
</p>
<form method="post" action="/magnit/dostavka/delete/all/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title" width="40%">Доставка</td>
	<td class="table_row_title" width="40%">Ссылка</td>	
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
			<td class="table_row"><input type="checkbox" name="delete_all[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['dostavka_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['dostavka_id'];?>
"></td>
			<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['dostavka_id'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</td>
			<td class="table_row"><a href="/magnit/dostavka/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['dostavka_id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
			<td class="table_row"><a onClick="conf('/magnit/dostavka/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['dostavka_id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
		</tr>
	<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
</p>
</form>
<?php }else{ ?>
<form method="post" action="/magnit/catalog/subdelete/all/<?php echo $_smarty_tpl->getVariable('cat_id')->value;?>
/">
<table class="table_view" cellspacing="2" cellpadding="2">
<tr>
	<td class="table_row_title"><input value="on" name="box" onclick="checkAll();" type="checkbox"></td>
	<td class="table_row_title">ID</td>
	<td class="table_row_title"></td>
	<td class="table_row_title" width="40%">Заголовок</td>
	<td class="table_row_title">Сортировка</td>
	<td class="table_row_title">На складе</td>
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
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
	<td class="table_row_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['is_store'];?>
</td>
	<td class="table_row"><?php echo $_smarty_tpl->tpl_vars['item']->value['is_pub'];?>
</td>
	<td class="table_row"><a href="/magnit/catalog/subedit/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/edit.png" width="19" height="20" alt="Изменить"></a></td>
	<td class="table_row"><a onClick="conf('/magnit/catalog/subdelete/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/')" href="#"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/delete.png" width="19" height="20" alt="Удалить" border="0"></a></td>
</tr>
<?php }} ?>
</table>
<p class="delete_all">
<input onclick="javascript: return confirm('Внимание!\nВы действительно хотите удалить');" type="submit" class="large button red" value="Удалить">
<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
</p>
</form>
<?php }?>

</div>