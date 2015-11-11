<?
session_start();
include 'config.php';
	
	if(!isset($_SESSION['login']) && !isset($_SESSION['password'])) {

    	$Validate->Locate("/login/"); 

    }else{
		$Rooms = new Rooms();
		$Rooms->name = validate($_POST['name'], 120);
		$return = $Rooms->ViewRooms();
		while(!$return->EOF){
			$view[] = array(
				'id' => $return->fields['id'],
				'name' => $return->fields['name'],
				'create_date' => $return->fields['create_date']);
			
			
			$return->MoveNext();
		}
		//print_r($_SESSION);
		$lati->assign("login", $_SESSION['login']);
		$lati->assign("view", $view);
		$lati->assign("user_is_admin", $_SESSION['is_admin']);	
	}
			$Config = new Config();
			
			$lati->assign("page", "templates/default/index.tpl");
			$lati->display("templates/default/main.tpl");

	

	switch($act) {	

		case "logout": 
			session_destroy();
			$Validate->Locate("/");
		break;
	
	}	

?>