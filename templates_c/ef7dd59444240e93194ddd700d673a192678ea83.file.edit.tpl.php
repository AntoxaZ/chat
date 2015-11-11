<?php /* Smarty version Smarty-3.0.8, created on 2013-05-15 20:52:53
         compiled from "templates/default/articles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17018698195193cb7554d2d5-41370255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7dd59444240e93194ddd700d673a192678ea83' => 
    array (
      0 => 'templates/default/articles/edit.tpl',
      1 => 1367633681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17018698195193cb7554d2d5-41370255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">

<form name="form" method="post" action="">
	<div class="row">Заголовок:<br><input name="title" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input"></div>
	<div class="row row_radio">Видимость на сайте:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> Нет</label>
	</div>
	<div class="row">Краткое описание:<br><textarea id="edit" name="short_text" cols="90" rows="15"><?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php echo $_smarty_tpl->getVariable('view')->value['short_text'];?>
<?php }?></textarea></div>
	<div class="row">Полный текст:<br><textarea id="edit_two" name="text" cols="90" rows="15"><?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php echo $_smarty_tpl->getVariable('view')->value['text'];?>
<?php }?></textarea></div>
	<div class="row">Ключевые слова(keywords):<br><input name="meta_keywords" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_keywords'];?>
"<?php }?> class="input"></div>
 	<div class="row">Описание(description):<br><input name="meta_description" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_description'];?>
"<?php }?> class="input"></div>
	<div class="row">
			<input type="button" onclick="Valid(this.form);" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</form>

</div>