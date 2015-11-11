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

class Validate {

    public function Locate($path, $alert = 0, $text = 0) {
    	if($alert != 0) { echo ("<script language='Javascript'>alert(\"$text\");</script>"); }
        die ("<script language='Javascript'>function reload() {location = \"$path\"}; setTimeout('reload()', 0);</script>");
    }

}

?>