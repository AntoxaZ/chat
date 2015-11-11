<?php /* Smarty version Smarty-3.0.8, created on 2015-11-11 13:44:16
         compiled from "templates/default/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3113356432a10abc645-67433283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe02a204b15e365e62716168406f0addda0405ca' => 
    array (
      0 => 'templates/default/main.tpl',
      1 => 1447242254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3113356432a10abc645-67433283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
css/style.css" rel="stylesheet" type="text/css">
	<link href="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/jquery.js"></script>
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/jquery-ui.js"></script>
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/script.js"></script>
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/form.js"></script>
	<script type="text/javascript" src="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="/rooms/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/favicon.png">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="pull-right">
			<?php if ($_smarty_tpl->getVariable('login')->value!=''){?>
				<a class="btn btn-info" href="/logout/" >Logout, <?php echo $_smarty_tpl->getVariable('login')->value;?>
.</a></div>
			<?php }?>
		</div>
		<div class="row">
			<div class="content">
				<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('page')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			</div>
		</div>
	</div>
</body>
</html>