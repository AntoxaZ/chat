<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$Rooms = new Rooms();
$pr = $Rooms->LastMessagePrivatView($_SESSION['id']);
if(empty($pr->fields['id'])){
	echo "null";
}else{
	$json = array();
	
	
	while(!$pr->EOF){ //Надо вытянуть айдишник юзера с кем переписка
		if($pr->fields['id_first_user'] != $_SESSION['id']){$id_reciver = $pr->fields['id_first_user'];}
		else{$id_reciver = $pr->fields['id_second_user'];}


			
		$json[] = array(
			"id" =>  $id_reciver);
		$pr->MoveNext();
	}
	echo json_encode($json);
}
?>