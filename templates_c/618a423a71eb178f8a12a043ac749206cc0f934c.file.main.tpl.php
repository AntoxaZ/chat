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
	<div class="logout"><a href="/" target="_blank">Просмотр сайта</a>&nbsp;&nbsp;<a href="/magnit/logout/">Logout, <?php echo $_smarty_tpl->getVariable('configLogin')->value;?>
.</a></div>
</div>

<div align="center" class="header_all_sub">
<div class="main">

<div class="title">
	<div class="top_menu">
<div style="height: 15px;"></div>
		<ul class="dropdown">
			<li><a href="/magnit/" title="Главная" <?php if (!$_smarty_tpl->getVariable('mod')->value){?>style="border: 1px solid #ccc;"<?php }?>>Главная</a></li>
			<li><a href="/magnit/order/" title="Заказы" <?php if ($_smarty_tpl->getVariable('act')->value=="order_view"){?>style="border: 1px solid #ccc;"<?php }?>>Заказы</a></li>
			<li><a href="/magnit/catalog/" title="Каталог" <?php if ($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value!="price"&&$_smarty_tpl->getVariable('act')->value!="order_view"){?>style="border: 1px solid #ccc;"<?php }?>>Каталог</a></li>
			<li><a href="/magnit/catalog/price/" title="Прайс" <?php if ($_smarty_tpl->getVariable('act')->value=="price"){?>style="border: 1px solid #ccc;"<?php }?>>Прайс</a></li>
			<li><a href="/magnit/pages/" title="Страницы" <?php if ($_smarty_tpl->getVariable('mod')->value=="pages"){?>style="border: 1px solid #ccc;"<?php }?>>Страницы</a></li>
			<li><a href="/magnit/menu/" title="Навигация" <?php if ($_smarty_tpl->getVariable('mod')->value=="menu"){?>style="border: 1px solid #ccc;"<?php }?>>Навигация</a></li>
			<li><a href="/magnit/action/" title="Акции" <?php if ($_smarty_tpl->getVariable('mod')->value=="action"){?>style="border: 1px solid #ccc;"<?php }?>>Акции</a></li>
			<li><a href="/magnit/slider/" title="Слайдер" <?php if ($_smarty_tpl->getVariable('mod')->value=="slider"){?>style="border: 1px solid #ccc;"<?php }?>>Слайдер</a></li>
			<li><a href="/magnit/advertising/" title="Реклама" <?php if ($_smarty_tpl->getVariable('mod')->value=="advertising"){?>style="border: 1px solid #ccc;"<?php }?>>Реклама</a></li>
			<li><a href="/magnit/articles/" title="Важно знать" <?php if ($_smarty_tpl->getVariable('mod')->value=="articles"){?>style="border: 1px solid #ccc;"<?php }?>>Важно знать</a></li>
			<?php if ($_smarty_tpl->getVariable('configChmod')->value=="1"){?>
			<li><a href="/magnit/admins/" title="Администраторы" <?php if ($_smarty_tpl->getVariable('mod')->value=="admins"){?>style="border: 1px solid #ccc;"<?php }?>>Администраторы</a></li>
			<li><a href="/magnit/config/" title="Настройки" <?php if ($_smarty_tpl->getVariable('mod')->value=="config"){?>style="border: 1px solid #ccc;"<?php }?>>Настройки</a></li>
			<?php }?>
		</ul>
	</div>
</div>

<div class="subtitle">
<div style="height: 5px;"></div>
<?php if ($_smarty_tpl->getVariable('mod')->value=="catalog"&&$_smarty_tpl->getVariable('act')->value!="price"&&$_smarty_tpl->getVariable('act')->value!="order_view"){?>
<div class="view_menu_subtitle"><a href="/magnit/catalog/">Каталог</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/catalog/subadd/">Добавить контент</a></li>
			<li><a href="/magnit/catalog/add/">Добавить категорию</a></li>
			<li><a href="/magnit/photos/">Доп фото</a></li>
			<li><a href="/magnit/photos/add/">Добавить доп фото</a></li>
			<li><a href="/magnit/city/">Города</a></li>
			<li><a href="/magnit/dostavka/">Перевозчики</a></li>
			<li><a href="/magnit/address/">Адреса</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('act')->value=="price"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">Прайс</a></div>
<?php }elseif($_smarty_tpl->getVariable('act')->value=="order_view"){?>
<div class="view_menu_subtitle"><a href="/magnit/order/">Заказы</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/order/1/">Архив заказов</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="slider"){?>
<div class="view_menu_subtitle"><a href="/magnit/slider/">Заказы</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/slider/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="pages"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">Страницы</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/pages/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="advertising"){?>
<div class="view_menu_subtitle"><a href="/magnit/advertising/">Реклама</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/advertising/add/">Добавить</a></li>
		</ul>
	</div>	
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="action"){?>
<div class="view_menu_subtitle"><a href="/magnit/action/">Акции</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/action/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="menu"){?>
<div class="view_menu_subtitle"><a href="/magnit/pages/">Навигация</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/menu/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="articles"){?>
<div class="view_menu_subtitle"><a href="/magnit/articles/">Важно знать</a></div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="advertising"){?>
<div class="view_menu_subtitle"><a href="/magnit/advertising/">Реклама</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/advertising/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="admins"){?>
<div class="view_menu_subtitle"><a href="/magnit/admins/">Администраторы</a></div>
	<div class="view_menu_edit">
		<ul class="view_submenu">
			<li><a href="/magnit/admins/add/">Добавить</a></li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('mod')->value=="config"){?>
<div class="view_menu_subtitle"><a href="/magnit/config/">Настройки</a></div>
<?php }else{ ?>
<div class="view_menu_subtitle">Главная</div>
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