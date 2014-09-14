<?php
	require("../Clases/login.php");
	$obj = new login();
	$obj->conectar();
	$num_rows = $obj->logIn();
	if($num_rows > 0)
		echo "1";
	else
		echo "0";

?>