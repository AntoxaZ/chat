<?php /* Smarty version Smarty-3.0.8, created on 2014-06-27 08:10:17
         compiled from "templates/default//main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54034403553acfcb91ee999-06495427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618a423a71eb178f8a12a043ac749206cc0f934c' => 
    array (
      0 => 'templates/default//main.tpl',
      1 => 1403819949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54034403553acfcb91ee999-06495427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Admin Center Login | LatiCMS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta http-equiv="Pragma" content="no-cache">
	<link href="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
css/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/jquery.js"></script>
	<script type="text/javascript" src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/jquery-ui.js"></script>
	<script type="text/javascript" src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/script.js"></script>
	<?php if (($_smarty_tpl->getVariable('mod')->value)&&($_smarty_tpl->getVariable('mod')->value!="config")&&($_smarty_tpl->getVariable('mod')->value!="advertising")){?>
	<script src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/tinymce/tiny_mce.js" type="text/javascript"></script>
	<script src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/editor.js" type="text/javascript"></script>
	<?php }?>
	<script type="text/javascript" src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
/js/form.js"></script>
	<link rel="shortcut icon" href="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/favicon.png">
</head>
<body>

<div class="header_all_top">
	<div class="fl"><a href="http://itlati.com/" target="_blank" title="LatiCMS"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/logo.png" alt="LatiCMS"></a></div>
	<div class="logout"><a href="/" target="_blank">�������� �����</a>&nbsp;&nbsp;<a href="/magnit/logout/">Logout, <?php echo $_smarty_tpl->getVariable('configLogin')->value;?>
.</a></div>
</div>

<div align="center" class="header_all_sub">
<div class="main">

<div class="title">
	<div class="top_menu">
<div style="height: 15px;"></div>
		<ul class="dropdown">
			<li><a href="/magnit/" title="�������" <?php if (!$_smarty_tpl->getVariable('mod')->value){?>style="border: 1px solid #ccc;"<?php }?>>�������</a></li>
			<li><a href="/magnit/order/" title="������" <?php if ($_smarty_tpl->getVariable('act')->value=="order_view"){?>style="border: 1px solid #ccc;"<?php }?>>������</a></li>
			<li><a href="/magnit/catalog/" title="�������" <?php if ($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value!="price"&&$_smarty_tpl->getVariable('act')->value!="order_view"){?>style="border: 1px solid #ccc;"<?php }?>>�������</a></li>
			<li><a href="/magnit/catalog/price/" title="�����" <?php if ($_smarty_tpl->getVariable('act')->value=="price"){?>style="border: 1px solid #ccc;"<?php }?>>�����</a></li>
			<li><a href="/magnit/pages/" title="��������" <?php if ($_smarty_tpl->getVariable('mod')->value=="pages"){?>style="border: 1px solid #ccc;"<?php }?>>��������</a></li>
			<li><a href="/magnit/menu/" title="���������" <?php if ($_smarty_tpl->getVariable('mod')->value=="menu"){?>style="border: 1px solid #ccc;"<?php }?>>���������</a></li>
			<li><a href="/magnit/action/" title="�����" <?php if ($_smarty_tpl->getVariable('mod')->value=="action"){?>style="border: 1px solid #ccc;"<?php }?>>�����</a></li>
			<li><a href="/magnit/slider/" title="�������" <?php if ($_smarty_tpl->getVariable('mod')->value=="slider"){?>style="border: 1px solid #ccc;"<?php }?>>�������</a></li>
			<li><a href="/magnit/advertising/" title="�������" <?php if ($_smarty_tpl->getVariable('mod')->value=="advertising"){?>style="border: 1px solid #ccc;"<?php }?>>�������</a></li>
			<li><a href="/magnit/articles/" title="����� �����" <?php if ($_smarty_tpl->getVariable('mod')->value=="articles"){?>style="border: 1px solid #ccc;"<?php }?>>����� �����</a></li>
			<?php if ($_smarty_tpl->getVariable('configChmod')->value=="1"){?>
			<li><a href="/magnit/admins/" title="��������������" <?php if ($_smarty_tpl->getVariable('mod')->value=="admins"){?>style="border: 1px solid #ccc;"<?php }?>>��������������</a></li>
			<li><a href="/magnit/config/" title="���������" <?php if ($_smarty_tpl->getVariable('mod')->value=="config"){?>style="border: 1px solid #ccc;"<?php }?>>���������</a></li>
			<?php }?>
		</ul>
	</div>
</div>

<div class="subtitle">
<div style="height: 5px;"></div>
<?php if ($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value!="price"&&$_smarty_tpl->getVariable('act')->value!="order_view"){?>
<div class="view_menu_subtitle"><a href="/magnit/catalog/">�������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/catalog/subadd/">�������� �������</a></li>
			<li><a href="/magnit/catalog/add/">�������� ���������</a></li>
			<li><a href="/magnit/photos/">��� ����</a></li>
			<li><a href="/magnit/photos/add/">�������� ��� ����</a></li>
			<li><a href="/magnit/city/">������</a></li>
			<li><a href="/magnit/dostavka/">�����������</a></li>
			<li><a href="/magnit/address/">������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('act')->value=="price"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">�����</a></div>
<?php }elseif($_smarty_tpl->getVariable('act')->value=="order_view"){?>
<div class="view_menu_subtitle"><a href="/magnit/order/">������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/order/1/">����� �������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="slider"){?>
<div class="view_menu_subtitle"><a href="/magnit/slider/">������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/slider/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="pages"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">��������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/pages/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="advertising"){?>
<div class="view_menu_subtitle"><a href="/magnit/advertising/">�������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/advertising/add/">��������</a></li>
		</ul>
	</div>	
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="action"){?>
<div class="view_menu_subtitle"><a href="/magnit/action/">�����</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/action/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="menu"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">���������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/menu/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="articles"){?>
<div class="view_menu_subtitle"><a href="/magnit/articles/">����� �����</a></div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="advertising"){?>
<div class="view_menu_subtitle"><a href="/magnit/advertising/">�������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/advertising/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="admins"){?>
<div class="view_menu_subtitle"><a href="/magnit/admins/">��������������</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/admins/add/">��������</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="config"){?>
<div class="view_menu_subtitle"><a href="/magnit/config/">���������</a></div>
<?php }else{ ?>
<div class="view_menu_subtitle">�������</div>
<?php }?>
</div>

  <div class="content">
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </div>
  
</div>
</div>

</body>
</html>