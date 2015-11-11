<?php
//запускаем сессию
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$Messages = new Messages();

$Messages->id_user = validate($_SESSION['id'], 120);
$Messages->id_room = validate($_POST['id_room'], 120);
$Messages->text = validate($_POST['text_message'], 120);
$Messages->AddMessageAdmin();

?>