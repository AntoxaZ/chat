<?php /* Smarty version Smarty-3.0.8, created on 2015-08-28 20:48:55
         compiled from "templates/default/clients/view_client_uniprice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2427455e09f0743ba57-16628982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e6c1e1eabf03077cecba903840a40527c0ec27' => 
    array (
      0 => 'templates/default/clients/view_client_uniprice.tpl',
      1 => 1440784133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2427455e09f0743ba57-16628982',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin_uniprice client_uniprice" >
	<div class="row"><span class="title_uniprice">Личные даные</span></div>
		<table class="table_view" cellspacing="2" cellpadding="2">
			<tr>
				<td class="table_row_title">Название товара</td>
				<td class="table_row_title">Количество</td>
				<td class="table_row_title">Цена</td>
				<td class="table_row_title"></td>
				<td class="table_row_title"></td>
				<td class="table_row_title"></td>
			</tr>
			<tr>
				<td class="table_row">
				<form method="post" action="/magnit/clients/add_client_uniprice/">
				<!-- Добавление новой уникальной цены -->
					<input type="hidden" name="id_client" value="<?php echo $_smarty_tpl->getVariable('view')->value['id'];?>
">
					<!--<input type="text" id="textbox"> -->
					<select name="item" class="input_uniprice">
						<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('subview')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
							<optgroup label="<?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
">
							<?php  $_smarty_tpl->tpl_vars['itemss'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('viewsub_c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['itemss']->key => $_smarty_tpl->tpl_vars['itemss']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['itemss']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['itemss']->value['cat_id']==$_smarty_tpl->tpl_vars['items']->value['id']){?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['itemss']->value['id'];?>
"
										<?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_client_uniprice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item1']->key;
?>
											<?php if ($_smarty_tpl->tpl_vars['item1']->value['cat_id']==$_smarty_tpl->tpl_vars['itemss']->value['id']){?>
												disabled 
											<?php }?>
										<?php }} ?>	
									><?php echo $_smarty_tpl->tpl_vars['itemss']->value['title'];?>
</option>	
								<?php }?>
							<?php }} ?>
						<?php }} ?>
					</select>
				</td>
				<td class="table_row">
					<input type="text" name="count" class="input_uniprice">
				</td>
				<td class="table_row">
					<input type="text" name="price" class="input_uniprice">
				</td>
				<td class="table_row">
					<label>$<input type="checkbox" name="usd" class="input_uniprice" value="1" /></label>
				</td>
				<td class="table_row">
					<input type="submit" style="background: url('/magnit/templates/default/i/add.png'); width: 23px; height: 22px; cursor: pointer"" value="">
				</td>
			</tr>
				</form>
	<!-- Изменение старой уникальной цены-->
				
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('view_client_uniprice')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td class="table_row">
								<form method="post" action="/magnit/clients/edit_client_uniprice/">
									<?php  $_smarty_tpl->tpl_vars['itemss'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('viewsub_c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['itemss']->key => $_smarty_tpl->tpl_vars['itemss']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['itemss']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['itemss']->value['id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>
											<?php echo $_smarty_tpl->tpl_vars['itemss']->value['title'];?>

										<?php }?>
									<?php }} ?>
							</td>
							<td class="table_row">
								<input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
">
								<input type="hidden" name="id_client" value="<?php echo $_smarty_tpl->getVariable('view')->value['id'];?>
">
								<input type="text" name="count" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
">
							</td>
							<td class="table_row">
								<input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
							</td>
							<td class="table_row">
								<label>$<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['usd']==1){?>checked<?php }?> name="usd" value="1" /></label>
							</td>
							<td class="table_row">
								<input type="submit" style="background: url('/magnit/templates/default/i/save.png'); width: 22px; height: 22px; cursor: pointer" value="">
							</td>	
							</form>
							<td class="table_row">
								<a href="/magnit/clients/delete_client_uniprice/<?php echo $_smarty_tpl->getVariable('view')->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
/"><img width="22" src="/magnit/templates/default/i/delete.png"></a>
							</td>		
					<?php }} ?>
		</table>
<script>
$(function() {
  $('select').filterByText($('#textbox'), true);
});  
</script>
</div>