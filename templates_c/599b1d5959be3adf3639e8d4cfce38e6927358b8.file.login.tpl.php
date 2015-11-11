<?php /* Smarty version Smarty-3.0.8, created on 2013-05-07 20:41:35
         compiled from "./templates/../templates/default//login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211040848051893ccfb0dc67-86438118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '599b1d5959be3adf3639e8d4cfce38e6927358b8' => 
    array (
      0 => './templates/../templates/default//login.tpl',
      1 => 1367633678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211040848051893ccfb0dc67-86438118',
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
	<link href="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
css/login.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('config')->value['site'];?>
magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['tpl'];?>
js/form.js"></script>
	<link rel="shortcut icon" href="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/favicon.png">
</head>
<body>

<div class="header_top"><div style="width: 100px; height: 35px; float: left"><a href="http://itlati.com/" target="_blank" title="LatiCMS"><img src="/magnit/templates/<?php echo $_smarty_tpl->getVariable('config')->value['atpl'];?>
i/logo.png" alt="LatiCMS"></a></div></div>
<div class="header_sub">Admin Center Login</div>

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

</div>

</body>
</html>