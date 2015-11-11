<?php /* Smarty version Smarty-3.0.8, created on 2015-07-22 09:52:38
         compiled from "templates/default/config/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2471955af3db67f53c4-33560891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1437174998cef1b1f7b3b70aba8363bc74ca4347' => 
    array (
      0 => 'templates/default/config/edit.tpl',
      1 => 1437547947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471955af3db67f53c4-33560891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form name="form" method="post" action="/magnit/config/">
	<div class="row row_radio">Отключить интернет магазин:<br>
			<label><input type="radio" name="is_close" value="1" <?php if ($_smarty_tpl->getVariable('view')->value['is_close']=="1"){?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_close" value="0" <?php if ($_smarty_tpl->getVariable('view')->value['is_close']=="0"){?>checked<?php }?>> Нет</label>
	</div>
	<div class="row">E-mail администратора:<br><input name="email" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['email'];?>
" class="input"></div>
	<div class="row">Курс доллара(формат: 10.5):<br><input name="dollar" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['dollar'];?>
" class="input"></div>
	<div class="row">Сумма с предоплатой:<br><input name="min_price" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['min_price'];?>
" class="input"></div>
	<div class="row">Титлы(title):<br><input name="meta_title" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_title'];?>
" class="input"></div>
	<div class="row">Ключевые слова(keywords):<br><input name="meta_keywords" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_keywords'];?>
" class="input"></div>
	<div class="row">Описание(description):<br><input name="meta_description" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_description'];?>
" class="input"></div>
	<div class="row">Телефон:<br><input name="phone" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['phone'];?>
" class="input"></div>
	<div class="row">Телефон 2:<br><input name="phone2" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['phone2'];?>
" class="input"></div>
	<div class="row">Телефон 3:<br><input name="phone3" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['phone3'];?>
" class="input"></div>
	<div class="row">ICQ:<br><input name="icq" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['icq'];?>
" class="input"></div>
	<div class="row">Skype:<br><input name="skype" type="text" value="<?php echo $_smarty_tpl->getVariable('view')->value['skype'];?>
" class="input"></div>
	<div class="row">Счетчики:<br><textarea name="counter" cols="60" rows="20"><?php echo $_smarty_tpl->getVariable('view')->value['counter'];?>
</textarea></div>
	<div class="row">
			<input type="submit" class="large button blue" value="Сохранить">
	</div>
</div>
</form>
</div>