<?php /* Smarty version Smarty-3.0.8, created on 2013-05-12 23:33:22
         compiled from "templates/default/slider/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433081348518ffc924b4dd1-62741422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df660aafa0cd58a4180c9b6e82515ae74e35d21' => 
    array (
      0 => 'templates/default/slider/edit.tpl',
      1 => 1367633690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433081348518ffc924b4dd1-62741422',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="table_view_margin">
<form name="form" method="post" action="" enctype="multipart/form-data">
	<input name="title" type="hidden" <?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?>value="<?php echo $_smarty_tpl->getVariable('view')->value['title'];?>
"<?php }?> class="input">
	<div class="row">�����������:<br>
			<input name="image" type="file" size="67">
			<p class="image_margin"><?php if ($_smarty_tpl->getVariable('act')->value=="edit"){?><?php echo $_smarty_tpl->getVariable('view')->value['image'];?>
<?php }?></p>		
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