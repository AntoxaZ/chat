<?php /* Smarty version Smarty-3.0.8, created on 2013-05-08 08:47:35
         compiled from "templates/default/menu/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15123991725189e6f732b0c2-76527492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad8d11ed001faca1df21c7b87f17e450918b3732' => 
    array (
      0 => 'templates/default/menu/edit.tpl',
      1 => 1367633689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15123991725189e6f732b0c2-76527492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form name="form" method="post" action="">
	<div class="row">Заголовок:<br><input name="title" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input"></div>
	<div class="row">URL:<br><input name="url" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['url'];?>
"<?php }?> class="input"></div>
	<div class="row row_radio">Видимость на сайте:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> Нет</label>
	</div>
	<div class="row">
			<input type="button" onclick="Valid(this.form);" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>
</div>