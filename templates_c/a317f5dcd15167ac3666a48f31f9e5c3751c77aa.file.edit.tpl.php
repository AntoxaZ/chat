<?php /* Smarty version Smarty-3.0.8, created on 2015-07-07 10:40:18
         compiled from "templates/default/admins/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16399585965189e708425224-52670114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a317f5dcd15167ac3666a48f31f9e5c3751c77aa' => 
    array (
      0 => 'templates/default/admins/edit.tpl',
      1 => 1436214617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16399585965189e708425224-52670114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form name="form" method="post" action="">
	<div class="row">�����:<br><input name="login" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['login'];?>
"<?php }?> class="input"></div>
	<div class="row">������:<br><input name="password" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['password'];?>
"<?php }?> class="input"></div>
	<div class="row">���:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>
	<div class="row">Email:<br><input name="email" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['email'];?>
"<?php }?> class="input"></div>
	<div class="row">������:<br>
		<select name="chmod" class="select">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('group_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_view'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['sel']>0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
		<?php }} ?>
		</select>	
	</div>
	<div class="row row_radio">��������� �� �����:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> ��</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> ���</label>
	</div>
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>���������<?php }else{ ?>��������<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">��������� � ���������</a>
	</div>
</div>
</form>
</div>