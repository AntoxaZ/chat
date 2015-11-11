<?
/*
============================================
 Lati Content Management System
--------------------------------------------
 Copyright (c) 2012 Tanasov Andrey
--------------------------------------------
 http://www.itlati.com
--------------------------------------------
 ƒанный код защищен авторскими правами
============================================
*/

class Pages {

    public $table = 'pages';
    public $table_nav = 'nav';	

    public function __construct() {
		global $db;
		$this->db = $db;
    }

    public function ViewNav() {
		$SQL = "SELECT 
					id, 
					title,
					url
				FROM ".PREF."".$this->table_nav." WHERE is_pub = 1";
		$rs = $this->db->Execute($SQL);
		return $rs;
    }	

   	public function NavAdd() {
      	$SQL = "INSERT ".PREF."".$this->table_nav." SET 
      				title = '".$this->title."', 
      				url = '".$this->url."', 
      				is_pub = '".$this->is_pub."'";
		$rs = $this->db->Execute($SQL);
   	}	
	
	public function NavContent() {
		$SQL = "SELECT 
					id, 
					title,
					url,
					is_pub
				FROM ".PREF."".$this->table_nav." ORDER BY pos ASC";
		$rs = $this->db->Execute($SQL);
		return $rs;
    }	
	
   	public function NavEditView($id) {
		$SQL = "SELECT 
					title, 
					url, 
					is_pub
				FROM ".PREF."".$this->table_nav." WHERE id = ".$id;
		$rs = $this->db->Execute($SQL);
		return $rs;
   	}

   	public function NavEdit($id) {
      	$SQL = "UPDATE ".PREF."".$this->table_nav." SET 
      				title = '".$this->title."', 
      				url = '".$this->url."', 
      				is_pub = '".$this->is_pub."'
      			WHERE id = ".$id;
		$rs = $this->db->Execute($SQL);   	
   	} 
   	
   	public function NavDelete($id) {
      	$SQL = "DELETE FROM ".PREF."".$this->table_nav." WHERE id = ".$id." LIMIT 1";
		$rs = $this->db->Execute($SQL);
   	}   
   	
   	public function NavDeleteAll($delete_all) {
      	$SQL = "DELETE FROM ".PREF."".$this->table_nav." WHERE id IN(".$delete_all.")";
		$rs = $this->db->Execute($SQL);
   	}  	
	
    public function View($id) {
		$SQL = "SELECT 
					id, 
					title, 
					url, 
					text, 
					meta_keywords, 
					meta_description, 
					date 
				FROM ".PREF."".$this->table." WHERE is_pub = 1 AND id = ".$id;
		$rs = $this->db->Execute($SQL);
		return $rs;
    }

   	public function ViewContent() {
      	$SQL = "SELECT 
      				id, 
      				title, 
      				url,
      				is_pub, 
      				date
      			FROM ".PREF."".$this->table." ORDER BY id ASC";
		$rs = $this->db->Execute($SQL);
      	return $rs;
   	}
   	
   	public function Add() {
      	$SQL = "INSERT ".PREF."".$this->table." SET 
      				title = '".$this->title."', 
      				url = '".translit($this->title)."', 
      				text = '".$this->text."', 
      				is_pub = '".$this->is_pub."', 
      				meta_keywords = '".$this->meta_keywords."', 
      				meta_description = '".$this->meta_description."',
      				date = '".$this->date."'";
		$rs = $this->db->Execute($SQL);
   	}

   	public function EditView($id) {
		$SQL = "SELECT 
					title, 
					url, 
					text, 
					is_pub,
					meta_keywords, 
					meta_description
				FROM ".PREF."".$this->table." WHERE id = ".$id;
		$rs = $this->db->Execute($SQL);
		return $rs;
   	}

   	public function Edit($id) {
      	$SQL = "UPDATE ".PREF."".$this->table." SET 
      				title = '".$this->title."', 
      				url = '".translit($this->title)."', 
      				text = '".$this->text."', 
      				is_pub = '".$this->is_pub."', 
      				meta_keywords = '".$this->meta_keywords."', 
      				meta_description = '".$this->meta_description."'
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