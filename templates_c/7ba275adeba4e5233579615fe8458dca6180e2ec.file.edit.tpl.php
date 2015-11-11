<?php /* Smarty version Smarty-3.0.8, created on 2015-08-19 09:46:29
         compiled from "templates/default/clients/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079955d42645505311-93627593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba275adeba4e5233579615fe8458dca6180e2ec' => 
    array (
      0 => 'templates/default/clients/edit.tpl',
      1 => 1439966296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3079955d42645505311-93627593',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
	<form name="form" method="post" action="">
		<div class="row">Логин:<br><input name="login" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['login'];?>
"<?php }?> class="input"></div>
		<?php if ($_smarty_tpl->getVariable('act')->value!="edit"){?>
			<div class="row">Пароль:<br><input name="password" type="text" value="" class="input"></div>
		<?php }?>
		<div class="row">Имя:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>
		<div class="row">Фамилия:<br><input name="surname" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['surname'];?>
"<?php }?> class="input"></div>
		<div class="row">Email:<br><input name="email" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['email'];?>
"<?php }?> class="input"></div>
		<div class="row">Телефон:<br><input name="phone" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['phone'];?>
"<?php }?> class="input"></div>
		<div class="row">Категория:<br>
			<select name="category" class="select">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('group_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_view'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['name']==$_smarty_tpl->getVariable('view')->value['category']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
				<?php }} ?>
			</select>		
		</div>
		<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
		</div>
	</form>
</div>
	