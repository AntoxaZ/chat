<?php 
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$Users = new Users();
$Users->id = validate($_SESSION['id'], 120);
$rs = $Users->IsAdmin();
if(!empty($rs->fields['id'])){
	$Rooms = new Rooms();
	$Rooms->id = validate($_GET['id'], 120);
	//echo $_GET['id'];
	$Rooms->DeleteRoom();
	$Validate->Locate("/", 0, 0);
}else{
	$Validate->Locate("/", 0, 0);
}
?>