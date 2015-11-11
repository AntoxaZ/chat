<?

class Rooms {

	public $table = 'rooms';
	public $table_private = 'private_rooms';
			
    public function __construct() {
		global $db;
		$this->db = $db;
    }
	
	
   

    public function ViewRooms() {
		$SQL = "SELECT 
					id,
					name, 
					create_date
				FROM ".PREF."".$this->table;
		$rs = $this->db->Execute($SQL);
		return $rs;
		
     }  
	 
	 public function AddRooms() {
		$now = date("Y-d-m H:i:s");
		$SQL = "INSERT ".PREF."".$this->table." 
					SET 
					`name` = '".$this->name."', 
					`create_date` = '".$now."'";
		$rs = $this->db->Execute($SQL);
    }
	
	public function AddPrivateRooms($id_first, $id_second) {
	
		$SQL = "INSERT ".PREF."".$this->table_private." SET 
					`id_first_user` = '".$id_first."', 
					`id_second_user` = '".$id_second."'";
		$rs = $this->db->Execute($SQL);
    }
	
	public function ViewPrivateRooms($id_first, $id_second) {
	
		$SQL = "SELECT * 
				FROM  `private_rooms` 
				WHERE `id_first_user` = '".$id_first."' 
				AND `id_second_user` = '".$id_second."'
				OR `id_first_user` = '".$id_second."' 
				AND `id_second_user` = '".$id_first."'
				LIMIT 1";
		//echo $SQL;
				
		$rs = $this->db->Execute($SQL);
		return $rs;
    }
	
	public function ViewPrivateRoomsByUser($id_user, $id) {
	
		$SQL = "SELECT * 
				FROM  `private_rooms` 
				WHERE `id_first_user` = '".$id_first."' 
				AND `id` = '".$id."'
				OR `id_first_user` = '".$id_second."' 
				AND `id_second_user` = '".$id."'
				LIMIT 1";
				
		//echo $SQL;	
		$rs = $this->db->Execute($SQL);
		return $rs;
    }
	
	public function LastMessagePrivat() {
		
		$SQL = "UPDATE private_rooms SET 
      			last_message = '1', 
      			id_user_last_message = '".$this->id_reciver."'
				WHERE id = ".$this->id_private_room;
				
		//echo $SQL;
		$rs = $this->db->Execute($SQL);

		

    }
	
	public function LastMessagePrivatViewed() {
		//менял тут
		$SQL = "UPDATE private_rooms SET 
      			last_message = '0'
				WHERE id_user_last_message = ".$this->id_user_last_message."
				AND id = ".$this->id_private_room;
		//echo $SQL;
		$rs = $this->db->Execute($SQL);

		

    }
	
	public function LastMessagePrivatView($id) {
		
		$SQL = "SELECT * 
				FROM  `private_rooms` 
				WHERE last_message = 1
				AND id_user_last_message = ".$id;
		//echo $SQL;			
		$rs = $this->db->Execute($SQL);
		return $rs;
		

    }
	
	public function LastMessagePrivatViewIcons($id_user, $id_room) {
		
		$SQL = "SELECT id_first_user, id_second_user 
				FROM  `private_rooms` 
				WHERE last_message = 1
				AND id_user_last_message = ".$id_user."
				AND id = ".$id_room."";
		//echo $SQL;		
		
		$rs = $this->db->Execute($SQL);
		return $rs;
		

    }
	
	public function DeleteRoom() {
		$SQL = "DELETE FROM `rooms` WHERE id = ".$this->id." LIMIT 1";
		echo $SQL;
		$rs = $this->db->Execute($SQL);
		return $rs;
		

    }

}

?>