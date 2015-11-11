<?
/*
============================================
 Lati Content Management System
--------------------------------------------
 Copyright (c) 2013 Tanasov Andrey
--------------------------------------------
 http://www.itlati.com
--------------------------------------------
 ƒанный код защищен авторскими правами
============================================
*/

class Messages {

    public $table = 'messages';
    public $table_users = 'users';
    public $table_privat_messages = 'private_messages';
    public $table_privat_rooms = 'private_rooms';

    public function __construct() {
	  	global $db;
      	$this->db = $db;
   	}
	
   	public function ViewMessagesAdmin() {
		$SQL = "SELECT m.id, m.text, m.date, m.id_room, u.login AS name, u.id AS id_user
				FROM ".PREF."".$this->table." m
				LEFT JOIN ".PREF."".$this->table_users." u ON m.id_user = u.id
				WHERE m.id >  ".$this->mg."
				AND m.id <=".$this->m."
				AND m.id_room =".$this->id_room."
				ORDER BY m.id ASC";
		//echo $SQL;
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}	
	
	public function ViewMessagesPrivate() {
		$SQL = "SELECT m.id, m.text, m.date, m.id_private_room, u.login AS name, u.id AS id_user
				FROM ".PREF."".$this->table_privat_messages." m
				LEFT JOIN ".PREF."".$this->table_users." u ON m.id_user = u.id
				WHERE m.id >  ".$this->mg."
				AND m.id <=".$this->m."
				AND m.id_private_room =".$this->id_room."
				ORDER BY m.id ASC";
		//echo $SQL;
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}	
	
	public function AddMessageAdmin() {
		$now = date("Y-d-m H:i:s");
      	$SQL = "INSERT ".PREF."".$this->table." SET 
					id_user = '".$this->id_user."', 
					id_room = '".$this->id_room."', 
					text = '".$this->text."',
					date = '".$now."'";
		$rs = $this->db->Execute($SQL);
   	}
	
	
	public function AddPrivatMessage() {
		$now = date("Y-d-m H:i:s");
      	$SQL = "INSERT ".PREF."".$this->table_privat_messages." SET 
					id_private_room = '".$this->id_private_room."',  
					text = '".$this->text."',
					id_user = '".$this->id_user."',
					date = '".$now."'";
		//echo $SQL;
		$rs = $this->db->Execute($SQL);
   	}
	
	public function AddPrivatRoom() {
      	$SQL = "INSERT ".PREF."".$this->table_privat_rooms." SET 
					id_first_user = '".$this->id_first_user."',  
					id_second_user = '".$this->id_second_user."'";
		$rs = $this->db->Execute($SQL);
   	}
	
	public function DeleteMessageAdmin() {
		$SQL = "DELETE FROM ".PREF."".$this->table." WHERE id = ".$this->id." LIMIT 1";
		//echo $SQL;
		$rs = $this->db->Execute($SQL);
   	}
	

	public function MaxMessageRoom() {
		$SQL = "SELECT MAX(id) 
				FROM `messages` 
				WHERE id_room = '".$this->id_room."'";
		$rs = $this->db->Execute($SQL);
		//echo $SQL;
		return $rs;
   	}
	
	public function MaxMessageRoomPrivate() {
		$SQL = "SELECT MAX(id) 
				FROM ".PREF."".$this->table_privat_messages." 
				WHERE id_private_room = '".$this->id_room."'";
		$rs = $this->db->Execute($SQL);
		//echo $SQL;
		return $rs;
   	}

   	public function ViewAll($start, $limit) {
      	$SQL = "SELECT 
      				id, 
      				title, 
      				text,
      				date 
      			FROM ".PREF."".$this->table." 
      			WHERE is_pub = 1
      			ORDER BY id DESC
				LIMIT ".$start.",".$limit."";
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}

   	public function ViewContent() {
      	$SQL = "SELECT 
      				id,
      				title,      				
      				text,
      				is_pub,
      				date 
      			FROM ".PREF."".$this->table." 
      			ORDER BY id DESC";
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}

   	public function Add() {
      	$SQL = "INSERT ".PREF."".$this->table." SET 
					title = '".$this->title."', 
					text = '".$this->text."', 
					is_pub = '".$this->is_pub."',
					date = '".$this->date."'";
		$rs = $this->db->Execute($SQL);
   	}

   	public function EditView($id) {
      	$SQL = "SELECT 
      				id, 
      				title, 
      				text, 
      				is_pub
      			FROM ".PREF."".$this->table." 
      			WHERE id = '".$id."' 
      			LIMIT 1";
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}

   	public function Edit($id) {
      		$SQL = "UPDATE ".PREF."".$this->table." SET 
      			title = '".$this->title."', 
      			text = '".$this->text."', 
      			is_pub = '".$this->is_pub."',
				date = '".$this->date."'
      		WHERE id = ".$id;
		$rs = $this->db->Execute($SQL);
   	}

   	public function Delete($id) {
      	$SQL = "DELETE FROM ".PREF."".$this->table." WHERE id = ".$id." LIMIT 1";
		$rs = $this->db->Execute($SQL);
   	}

   	public function DeleteAll($delete_all) {
      	$SQL = "DELETE FROM ".PREF."".$this->table." WHERE id IN(".$delete_all.")";
		$rs = $this->db->Execute($SQL);
   	}     	
   	
}

?>