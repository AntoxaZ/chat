<?php
	include 'config.php';
	$Users = new Users();

	$Users->login = validate($_POST['login'], 120);
	$Users->password = md5(validate($_POST['password'], 120));
	$Users->password = md5(validate($_POST['confirm'], 120));
	$captcha = validate($_POST['captcha'], 4);

	switch($act){
		case "registration":
			$lati->assign("page", "templates/default/registration.tpl");
			$lati->display("templates/default/main.tpl");
		break;
		case "done":
			if (empty($captcha) || $_SESSION["captcha"]!=$captcha || validate($_POST['password'], 120) != validate($_POST['confirm'], 120)){ 	
				$lati->assign("error", 1);
				$lati->assign("page", "templates/default/registration.tpl");
				unset($_SESSION["captcha"]);
				$lati->display("templates/default/main.tpl");
				}
			else{
				$rs = $Users->Add();
				unset($_SESSION["captcha"]);
				//$lati->assign("page", "templates/".$config['atpl']."clients/done");
				$lati->display("../templates/".$config['atpl']."/login.tpl");
			}
			
			
		break;
		
	}
    	
		

?>
