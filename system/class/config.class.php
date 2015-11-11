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

class Config {

   	public $table = 'config';

   	public function __construct() {
	  	global $db;
      	$this->db = $db;
   	}

    public function View() {
		$SQL = "SELECT 
					id, 
					is_close,
					dollar,
					email,
					min_price,
					templates, 
					copyright, 
					meta_title,  
					meta_keywords,
					meta_description,
					phone,
					phone2,
					phone3,
					icq,
					skype,
					counter
				FROM ".PREF."".$this->table." LIMIT 1";
		$rs = $this->db->Execute($SQL);
		return $rs;
   	}
 	 	 	 	 
   	public function Edit($id) {
      	$SQL = "UPDATE ".PREF."".$this->table." SET
					is_close = '".$this->is_close."', 
      				email = '".$this->email."', 
      				dollar = '".$this->dollar."', 
					min_price = '".$this->min_price."', 
      				templates = '".$this->templates."', 
      				copyright = '".$this->copyright."', 
      				meta_title = '".$this->meta_title."', 
      				meta_keywords = '".$this->meta_keywords."', 
      				meta_description = '".$this->meta_description."',
      				phone = '".$this->phone."', 
      				phone2 = '".$this->phone2."', 
      				phone3 = '".$this->phone3."',
					icq = '".$this->icq."',
					counter = '".$this->counter."',
					skype = '".$this->skype."'
      			WHERE id = '".$id."' LIMIT 1";
		$rs = $this->db->_query($SQL);
		
   	}
   	
    public function NotebookView($id) {
		$SQL = "SELECT 
					notebook 
				FROM ".PREF."".$this->table." 
				WHERE id = '".$id."' LIMIT 1";
		$rs = $this->db->Execute($SQL);
		return $rs;
   	}

   	public function NotebookEdit($id) {
      	$SQL = "UPDATE ".PREF."".$this->table." SET 
      				notebook = '".$this->notebook."'
      			WHERE id = '".$id."' LIMIT 1";
		$rs = $this->db->Execute($SQL);
   	}   	
   	
}

?>