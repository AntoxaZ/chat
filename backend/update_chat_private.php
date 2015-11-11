<?php
	session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/config.php';
	
	$Rooms = new Rooms();
	$id_user = validate($_POST['id_reciver']);
	$id_room = $Rooms->ViewPrivateRooms($_SESSION['id'], $id_user);
	
	if(empty($id_room->fields['id'])  || empty($_SESSION['id'])){
		$Validate->Locate("/rooms/", 0, 0);
	}else{
		$id_room = $id_room->fields['id'];
	
	
	//$pr = $Rooms->ViewPrivateRoomsByUser($_SESSION['id'], $id_room);
	
	
	/*$Rooms->AddPrivateRooms($_SESSION['id'], $id_user);*/ //ѕерекидываем назад или отсылаем что ничего нет
	$Rooms->id_user_last_message = $_SESSION['id'];
	$Rooms->id_private_room = $id_room;
	$Rooms->LastMessagePrivatViewed();

	$Messages = new Messages();
	$Messages->id_room = $id_room;
	$max_message = 60;
	$m = $Messages->MaxMessageRoomPrivate();
	$m = $m->fields[0];
	$mg = validate($_POST['id'], 120);
    if($mg == 0){$mg = $m-$max_message;}
    if($mg < 0){$mg = 0;}
	$Messages->mg = $mg;
	$Messages->m = $m;
	$json = array();
	if($mg<$m){
		$return = $Messages->ViewMessagesPrivate();
		while(!$return->EOF){
			$json[] = array(
				"is_admin" => $_SESSION['is_admin'],
				"id" => $return->fields['id'],
				"id_user" => $return->fields['id_user'],
				"name" => $return->fields['name'],
				"id_room" => $return->fields['id_private_room'],
				"text" => $return->fields['text'],
				"date" => $return->fields['date']);
			$return->MoveNext();
		}
	}
	echo json_encode($json);


}
?>
