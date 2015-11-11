<?php
session_start();
include 'config.php';
if(empty($_SESSION['id'])){
	$Validate->Locate("/", 0, 0);
}
$Rooms = new Rooms();

$id_user = validate($_GET['id_user']);
echo $id_user;
$pr = $Rooms->ViewPrivateRooms($_SESSION['id'], $id_user);
if(empty($pr->fields['id']) && $id_user != $_SESSION['id']){//иначе на галвную
	$Rooms->AddPrivateRooms($_SESSION['id'], $id_user);
}
$id_room = $Rooms->ViewPrivateRooms($_SESSION['id'], $id_user);
			$lati->assign("login", $_SESSION['login']);
			$lati->assign("id_room", $id_room->fields['id']);
			$lati->assign("id_user", $id_user);
			$lati->assign("page", "templates/default/chat_private.tpl");
			$lati->display("templates/default/main.tpl");
?>
