<?session_start();
include 'config.php';
	$Users = new Users();
	$login = validate($_POST['login'], 60);
	$password = validate($_POST['password'], 60);
    $rs = $Users->Login($login, $password);
	if($rs->fields['id']) {

		$_SESSION['id'] = $rs->fields['id'];
       	$_SESSION['login'] = $rs->fields['login'];
  	 	$_SESSION['password'] = $rs->fields['password'];
   	 	$_SESSION['is_admin'] = $rs->fields['is_admin'];

        $Validate->Locate("/", 0, 0);
    }
	$lati->display("../templates/".$config['atpl']."/login.tpl");
?>