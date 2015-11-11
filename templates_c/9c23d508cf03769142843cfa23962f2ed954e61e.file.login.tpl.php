<?php /* Smarty version Smarty-3.0.8, created on 2015-11-11 13:53:35
         compiled from ".\templates\../templates/default//login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762756432c3f5c6147-95097904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c23d508cf03769142843cfa23962f2ed954e61e' => 
    array (
      0 => '.\\templates\\../templates/default//login.tpl',
      1 => 1447242812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762756432c3f5c6147-95097904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link href="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
css/login.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('config')->value['site'];?>
templates/<?php echo $_smarty_tpl->getVariable('config')->value['tpl'];?>
js/form.js"></script>
	<link rel="shortcut icon" href="/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/favicon.png">
</head>
<body>

<div class="block_enter" align="center">

  <div class="form_bg">
  <form method="post" action="">
     <div class="form">
           <div class="row">Логин:<br><input class="textinput" name="login" maxlength="60" type="text"></div>
           <div class="row">Пароль:<br><input class="textinput" name="password" maxlength="60" type="password"></div>
           <div class="row2"><input type="button" onClick="Login(this.form);" value="Войти" class="large button blue" ></div>
     </div>
  </form>
  </div>
	<a href="/registration/">Регистрация</a>
</div>

</body>
</html>