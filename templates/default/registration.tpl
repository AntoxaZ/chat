<form method="post" action="/registration/done/">
        <div class="row">Логин:<br><input id="login" class="textinput input_reg" name="login" maxlength="60" type="text"><span id="status"></span></div>
        <div class="row">Пароль:<br><input id="password" class="textinput input_reg" name="password" maxlength="60" type="password"></div><span id="status_pass"></span>
        <div class="row">Еще раз пароль:<br><input id="password_2" class="textinput input_reg" name="confirm" maxlength="60" type="password"></div>
		<div class="row">Контрольные цифры:<span class="star">*</span><br>
			<img src="/image.png" class="image_capcha">
			<input id="captcha" type="text" name="captcha" maxlength="4" class="textinput input_captcha" >
		</div>
		{if $error eq 1}
			<span>Неправельно введены контрольные цифры</span>
		{/if}
        <div class="row2"><input type="submit" value="Зарегистрироватся" onClick="PreRegistration(this.form);" class="large button blue" ></div>  
  </form>


