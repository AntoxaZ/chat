<?php
session_start();
include 'config.php';

if(empty($_SESSION['id'])){
	$Validate->Locate("/", 0, 0);
}
//$login = validate($_POST['login'], 60);
	$lati->assign("login", $_SESSION['login']);
	$lati->assign("get_id", validate($_GET['id'], 120));
	$lati->assign("page", "templates/default/chat.tpl");
	$lati->display("templates/default/main.tpl");
?>
