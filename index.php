<?php
	session_start();
	if(!isset($_SESSION['idUser'])){
		$index = file_get_contents('Vista/index.html');
		echo $index;
	}
	else{
		header("Location: Vista/inicio.php");
	}
?>