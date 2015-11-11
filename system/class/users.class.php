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

class Users {

    public $table = 'users';

    public function __construct() {
		global $db;
		$this->db = $db;
    }
    
   	public function Login($login, $password) {
      	$SQL = "SELECT 
      				id, 
      				login, 
      				password, 
      				is_admin 
      			FROM ".PREF."".$this->table." 
      			WHERE login = '".$login."' AND password = '".md5($password)."'"; 
	  	$rs = $this->db->Execute($SQL);
      	return $rs;
   	}    
    

	 	 
    public function IsAdmin() {
		$SQL = "SELECT id
				FROM ".PREF."".$this->table." WHERE is_admin = 1 AND id = ".$this->id."";
		//echo $SQL;		
		$rs = $this->db->Execute($SQL);
		return $rs;
    }

  	public function Add() {
      	$SQL = "INSERT ".PREF."".$this->table." SET 
      				login = '".$this->login."', 
      				password = '".$this->password."'";
					//echo $SQL;
		$rs = $this->db->Execute($SQL);
   	}

   	
   	
}

?>