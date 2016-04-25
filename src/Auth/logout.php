<?php 
	if ( session_id() == "" ){
		session_start();
		unset($_SESSION["user_name"]);
		unset($_SESSION["stateName"]);
		unset($_SESSION["stateID"]);
		header('Location: ../Templates/redirect.php');
	 }
?>
