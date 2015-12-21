<?php 
	if (isset($_GET['modul']) AND isset($_GET['action'])) {
		include "modul/".$_GET['modul']."/".$_GET['action'].".php";
	}elseif(isset($_GET['modul'])){
		include "modul/".$_GET['modul']."/index.php";
	}else{
		include "modul/welcome/index.php";
	}
 ?>