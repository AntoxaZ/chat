<?php 
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$Users = new Users();
$Users->id = validate($_SESSION['id'], 120);
$rs = $Users->IsAdmin();
if(!empty($rs->fields['id'])){
	$Rooms = new Rooms();
	$Rooms->name = validate($_POST['name_room'], 120);
	$Rooms->AddRooms();
	$Validate->Locate("/", 0, 0);	
}else{
	$Validate->Locate("/", 0, 0);
}
?>