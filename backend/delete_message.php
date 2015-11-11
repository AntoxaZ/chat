<?php
//запускаем сессию
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$Messages = new Messages();
$Users = new Users();

$Users->id = validate($_SESSION['id'], 120);
$rs = $Users->IsAdmin();
if(!empty($rs->fields['id'])){
	$Messages->id = validate($_POST['id'], 120);
	$Messages->DeleteMessageAdmin();
	echo "OK";

}



?>