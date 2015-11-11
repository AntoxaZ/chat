<?php
session_start();
	include $_SERVER['DOCUMENT_ROOT'].'/config.php';
	$Messages = new Messages();
	//echo $_SESSION['id'];
	$Messages->id_room = validate($_POST['id_room'], 120);
	//echo $_POST['id_room'];
	//$Messages->id_room = 1;//добавить перекидку с ид комнаты
	$max_message = 60;
	$m = $Messages->MaxMessageRoom();
	$m = $m->fields[0];
	$mg = validate($_POST['id'], 120);
    if($mg == 0){$mg = $m-$max_message;}
    if($mg < 0){$mg = 0;}
	$Messages->mg = $mg;
	$Messages->m = $m;
    
	

	$json = array();
	if($mg<$m){
		$return = $Messages->ViewMessagesAdmin();
		while(!$return->EOF){
			$json[] = array(
				"id_user_now" => $_SESSION['id'],
				"is_admin" => $_SESSION['is_admin'],
				"id" => $return->fields['id'],
				"id_user" => $return->fields['id_user'],
				"name" => $return->fields['name'],
				"id_room" => $return->fields['id_room'],
				"text" => $return->fields['text'],
				"date" => $return->fields['date']);
			$return->MoveNext();
		}
	}

	echo json_encode($json);
?>
