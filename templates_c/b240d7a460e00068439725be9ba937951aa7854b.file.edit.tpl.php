<?php /* Smarty version Smarty-3.0.8, created on 2015-08-28 21:11:09
         compiled from "templates/default/catalog/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:389955e0a43db8f1c4-09921114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b240d7a460e00068439725be9ba937951aa7854b' => 
    array (
      0 => 'templates/default/catalog/edit.tpl',
      1 => 1440785468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '389955e0a43db8f1c4-09921114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">

<?php if (($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="edit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Категория:<br>
		<select name="parent_id" class="select">
			<option value="0" <?php if ($_smarty_tpl->getVariable('parent_id')->value==0){?>selected="selected"<?php }?>>Корневая</option>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('parent_id')->value==$_smarty_tpl->tpl_vars['item']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
		<?php }} ?>
	</select>
	</div>
	<div class="row">Заголовок:<br><input name="title" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input"></div>
		<?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><p class="image_margin"><?php echo $_smarty_tpl->getVariable('view')->value['image'];?>
</p><?php }?>
		<div class="row" style="margin-bottom: 20px">Изображение:<br><input type="file" name="image" size="67"></div>
		<div class="row">Размер (пример: 1-6 mm):<br><input name="size" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['size'];?>
"<?php }?> class="input"></div>
		<div class="row">Сортировка:<br><input name="sort" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['sort'];?>
"<?php }?> class="input"></div>
	<div class="row row_radio">Видимость на сайте:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> Нет</label>
	</div>
	<div class="row">Ключевые слова(keywords):<br><input name="meta_keywords" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_keywords'];?>
"<?php }?> class="input"></div>
 	<div class="row">Описание(description):<br><input name="meta_description" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_description'];?>
"<?php }?> class="input"></div>

	<div class="row">
			<input type="button" onclick="Valid(this.form);" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>
<?php }elseif(($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="photos_add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="pedit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Категория:<br>
		<select name="cat_id" class="select">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('cat_id')->value==$_smarty_tpl->tpl_vars['item']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
		<?php }} ?>
	</select>
	</div>
		<?php if ($_smarty_tpl->getVariable('act')->value=="pedit"){?><p class="image_margin"><?php echo $_smarty_tpl->getVariable('view')->value['image'];?>
</p><?php }?>
		<div class="row" style="margin-bottom: 20px">Изображение:<br><input type="file" name="image" size="67"></div>
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>

<?php }elseif(($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="city_add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="city_edit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Область:<br>
		<select name="region_id" class="select">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('region')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->getVariable('region_id')->value==$_smarty_tpl->tpl_vars['k']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		<?php }} ?>
	</select>
	</div>
	<div class="row">Город:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="city_edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>	
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='city_edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>

<?php }elseif(($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="address_add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="address_edit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Доставка:<br>
		<select name="delivery_id" class="select">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['delivery_id'];?>
" <?php if ($_smarty_tpl->getVariable('delivery_id')->value==$_smarty_tpl->tpl_vars['item']->value['delivery_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
		<?php }} ?>
	</select>
	</div>
	<div class="row">Адрес:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="address_edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>	
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='address_edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>

<?php }elseif(($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="delivery_add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="delivery_edit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Город:<br>
		<select name="city_id" class="select">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['city_id'];?>
" <?php if ($_smarty_tpl->getVariable('city_id')->value==$_smarty_tpl->tpl_vars['item']->value['city_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
		<?php }} ?>
	</select>
	</div>
	<div class="row">Доставка:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="delivery_edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>	
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='delivery_edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>

<?php }elseif(($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="dostavka_add")||($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value=="dostavka_edit")){?>
<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Доставка:<br><input name="name" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="dostavka_edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['name'];?>
"<?php }?> class="input"></div>	
	<div class="row">Ссылка:<br><input name="link" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="dostavka_edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['link'];?>
"<?php }?> class="input"></div>	
	<div class="row">
			<input type="submit" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='dostavka_edit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/dostavka/" class="large button orange">Вернуться к просмотру</a>
	</div>
</div>
</form>

<?php }else{ ?>


<script>
$(document).ready(function(){

	var i = $('input').size() + 1;
	
	$('#add').click(function() {
		$('<div><input type="text" name="count[]" class="input" style="width: 244px">&nbsp;&nbsp;<input type="text" name="price[]" style="width: 244px" class="input">&nbsp;&nbsp;<label>$<input type="checkbox" name="usd[]" value="1" /></label></div>').fadeIn('slow').appendTo('.input_block');
		i++;
	});
	
	$('#remove').click(function() {
	if(i > 1) {
		$('.input:last').remove();
		$('.input:last').remove();
		i--; 
	}
	});

});
</script>


<?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>
<div style="float: right">
 <form method="post" action="/magnit/count/add/">
	<p>Добавить</p>
	<div class="row">Штук / Цена:<br>
		<input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
"class="input">
		<input type="text" name="count" value="<?php echo $_smarty_tpl->getVariable('item')->value['count'];?>
"class="input" style="width: 244px">&nbsp;&nbsp;
		<input type="text" name="price" value="<?php echo $_smarty_tpl->getVariable('item')->value['price'];?>
" style="width: 244px" class="input">&nbsp;
		<label>$<input type="checkbox" name="usd" value="1" /></label>&nbsp;
		<input type="submit" name="submit" style="background: url('/magnit/templates/default/i/add.png'); width: 22px; height: 22px; cursor: pointer" value="">&nbsp;
		<a href="/magnit/count/delete/<?php echo $_smarty_tpl->getVariable('item')->value['id'];?>
/"><img width="22" src="/magnit/templates/default/i/delete.png"></a>
	</div>
</form>
<div class="clear"></div>
<p align="left">Изменить</p>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_count')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
 <form method="post" action="/magnit/count/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
	<div class="row">Штук / Цена:<br>
		<input type="text" name="count" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
"class="input" style="width: 244px">&nbsp;&nbsp;
		<input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" style="width: 244px" class="input">&nbsp;&nbsp;
		<label>$
			<input type="checkbox" name="usd" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['usd']){?>checked<?php }?> />
		</label>&nbsp;
		<input type="submit" name="submit" style="background: url('/magnit/templates/default/i/save.png'); width: 22px; height: 22px; cursor: pointer" value="">&nbsp;
		<a href="/magnit/count/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><img width="22" src="/magnit/templates/default/i/delete.png"></a></div>
</form>
<?php }} ?>


</div>
<?php }?>

<form name="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">Категория:<br>
		<select name="cat_id" class="select">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>		
				<optgroup label="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"> 
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('subview')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['items']->value['parent_id']){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('cat_id')->value==$_smarty_tpl->tpl_vars['items']->value['id']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;- <?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
</option>
				<?php }?>
			<?php }} ?>
				</optgroup>
		<?php }} ?>
		</select>		
	</div>
	<div class="row">Заголовок:<br><input name="title" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input"></div>
	<?php if ($_smarty_tpl->getVariable('act')->value!="subedit"){?><div class="row">Штук / Цена:<br>
		<div class="input_block">
			<div><input type="text" name="count[]" class="input" style="width: 244px">&nbsp;&nbsp;<input type="text" name="price[]" style="width: 244px" class="input">&nbsp;&nbsp;<label>$<input type="checkbox" name="usd[]" value="1" /></label></div>
		</div>
		<a href="#" id="add">Добавить</a> | <a href="#" id="remove">Удалить</a>
	</div><?php }?>
	<div class="row">Сортировка:<br><input name="sort" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['sort'];?>
"<?php }?> class="input"></div>	
	<div class="row">Запрос цены:<br><input name="price" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['price'];?>
"<?php }?> class="input"></div>	
	<div class="row">Количество(через запятую, пример: 10,20,30,40):<br><input name="is_count" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['is_count'];?>
"<?php }?> class="input"></div>
	<?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><p class="image_margin"><?php echo $_smarty_tpl->getVariable('view')->value['image'];?>
</p><?php }?>
 	<div class="row" style="margin-bottom: 20px">Изображение:<br><input type="file" name="image" size="67"></div>
	<div class="row row_radio">На складе:<br>
		<label><input type="radio" name="is_store" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_store']=="0"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
		<label><input type="radio" name="is_store" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_store']=="1"){?>checked<?php }?><?php }?>> Нет</label>
	</div>	
	<div class="row row_radio">Видимость на сайте:<br>
			<label><input type="radio" name="is_pub" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="1"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Да</label>
			<label><input type="radio" name="is_pub" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_pub']=="0"){?>checked<?php }?><?php }?>> Нет</label>
	</div>
	<div class="row row_radio">Акция:<br>
			<label><input type="radio" name="is_vip" value="1" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_vip']=="1"){?>checked<?php }?><?php }?>> Да</label>
			<label><input type="radio" name="is_vip" value="0" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php if ($_smarty_tpl->getVariable('view')->value['is_vip']=="0"){?>checked<?php }?><?php }else{ ?>checked<?php }?>> Нет</label>
	</div>
 	<div class="row">Краткое описание:<br><textarea id="edit_one" name="short_text" cols="90" rows="15">
	<?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php echo $_smarty_tpl->getVariable('view')->value['short_text'];?>
<?php }else{ ?>
	<b>Форма</b>: -, <b>Внешний диаметр</b>: - мм, <b>Внутренний диаметр</b>: -, <b>Высота</b>: - мм, <b>Вес</b>: - гр, <b>Поверх. никел.</b>: -, <b>Намагничевание</b>: -, <b>Сцепление прибл.</b>: - кг	
	<?php }?>
	</textarea></div>
 	<div class="row">Описание:<br><textarea id="edit_two" name="text" cols="90" rows="15"><?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?><?php echo $_smarty_tpl->getVariable('view')->value['text'];?>
<?php }else{ ?>
	<b>Форма</b>: -,<br><b>Внешний диаметр</b>: - мм, <br><b>Внутренний диаметр</b>: -, <br><b>Высота</b>: - мм, <br><b>Вес</b>: - гр, <br><b>Поверх. никел.</b>: -, <br><b>Намагничевание</b>: -, <br><b>Сцепление прибл.</b>: - кг		
	
	<?php }?>
	</textarea></div>
	<div class="row">Ключевые слова(keywords):<br><input name="meta_keywords" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_keywords'];?>
"<?php }?> class="input"></div>
 	<div class="row">Описание(description):<br><input name="meta_description" type="text" <?php if ($_smarty_tpl->getVariable('act')->value=="subedit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['meta_description'];?>
"<?php }?> class="input"></div>
	<div class="row">
			<input type="button" onclick="Valid(this.form);" class="large button blue" value="<?php if ($_smarty_tpl->getVariable('act')->value=='subedit'){?>Сохранить<?php }else{ ?>Добавить<?php }?>">
			<a href="/magnit/<?php echo $_smarty_tpl->getVariable('mod')->value;?>
/" class="large button orange">Вернуться к просмотру</a>
	</div>
</form>
<?php }?>

</div>