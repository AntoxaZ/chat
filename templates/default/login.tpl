<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link href="/templates/{$config.atpl}css/login.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="{$config.site}templates/{$config.tpl}js/form.js"></script>
	<link rel="shortcut icon" href="/templates/{$config.atpl}i/favicon.png">
</head>
<body>

<div class="block_enter" align="center">

  <div class="form_bg">
  <form method="post" action="">
     <div class="form">
           <div class="row">�����:<br><input class="textinput" name="login" maxlength="60" type="text"></div>
           <div class="row">������:<br><input class="textinput" name="password" maxlength="60" type="password"></div>
           <div class="row2"><input type="button" onClick="Login(this.form);" value="�����" class="large button blue" ></div>
     </div>
  </form>
  </div>
	<a href="/registration/">�����������</a>
</div>

</body>
</html>