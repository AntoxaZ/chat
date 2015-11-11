<?php /* Smarty version Smarty-3.0.8, created on 2015-07-07 10:47:39
         compiled from "templates/default/catalog/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51793469451893cf1511392-10293820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db69592f62af3684bd55929697d98b22d731f7ff' => 
    array (
      0 => 'templates/default/catalog/price.tpl',
      1 => 1436214618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51793469451893cf1511392-10293820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<?php if ($_smarty_tpl->getVariable('add')->value){?><p class="add" style="font-size: 14px">Успешно добавлено.</p><br><?php }?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<input name="title" type="hidden" value="1">
	<div class="row">Прайс-лист:<br><input name="file" size="60" type="file"></div>
	<div class="row">
			<input type="submit" class="large button blue" value="Добавить">
	</div>
</form>
</div>