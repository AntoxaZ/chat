<?php /* Smarty version Smarty-3.0.8, created on 2015-11-11 13:55:12
         compiled from "templates/default/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20756432ca0d72fb0-60877015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e8ab6871b2a2dd3d074877bba4106ed63add933' => 
    array (
      0 => 'templates/default/registration.tpl',
      1 => 1447242909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20756432ca0d72fb0-60877015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="/registration/done/">
        <div class="row">Логин:<br><input id="login" class="textinput input_reg" name="login" maxlength="60" type="text"><span id="status"></span></div>
        <div class="row">Пароль:<br><input id="password" class="textinput input_reg" name="password" maxlength="60" type="password"></div><span id="status_pass"></span>
        <div class="row">Еще раз пароль:<br><input id="password_2" class="textinput input_reg" name="confirm" maxlength="60" type="password"></div>
		<div class="row">Контрольные цифры:<span class="star">*</span><br>
			<img src="/image.png" class="image_capcha">
			<input id="captcha" type="text" name="captcha" maxlength="4" class="textinput input_captcha" >
		</div>
		<?php if ($_smarty_tpl->getVariable('error')->value==1){?>
			<span>Неправельно введены контрольные цифры</span>
		<?php }?>
        <div class="row2"><input type="submit" value="Зарегистрироватся" onClick="PreRegistration(this.form);" class="large button blue" ></div>  
  </form>


