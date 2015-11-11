<?php
//запускаем сессию
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';

$id_user = validate($_SESSION['id'], 120);
$id_private_room = validate($_POST['id_room'], 120);
$text = validate($_POST['text_message'], 120);
$id_reciver = validate($_POST['id_reciver'], 120);

$Messages = new Messages();
$Messages->id_user = $id_user;
$Messages->id_private_room = $id_private_room;
$Messages->text = $text;
$Messages->AddPrivatMessage();

$Rooms = new Rooms();
$Rooms->id_reciver = $id_reciver;
$Rooms->id_private_room = $id_private_room;
$Rooms->LastMessagePrivat();
?>