<?php /* Smarty version Smarty-3.0.8, created on 2013-05-15 09:47:38
         compiled from "templates/default/advertising/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11543325051932f8a414548-40751337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c6f4cb81778ff71e5737d7e6312d675b60cbfd9' => 
    array (
      0 => 'templates/default/advertising/edit.tpl',
      1 => 1368600456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11543325051932f8a414548-40751337',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Название:<br><input name="title" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input"></div>
	<div class="row">Url(без http://):<br><input name="url" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['url'];?>
"<?php }?> class="input"></div>
	<div class="row">Картинка:<br>
			<input name="image" type="file" size="67">
			<p class="image_margin"><?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php echo $_smarty_tpl->getVariable('view')->value['image'];?>
<?php }?></p>		
	</div>
	<div class="row row_radio">Видимость на сайте:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> Нет</label>
	</div>
 	<div class="row">Кликов:<br><input name="click" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['click'];?>
"<?php }else{ ?>value="0"<?php }?> class="input"></div>
	<div class="row">Код:<br><textarea name="text" cols="60" rows="20"><?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php echo $_smarty_tpl->getVariable('view')->value['text'];?>
<?php }?></textarea></div>
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>
</div>