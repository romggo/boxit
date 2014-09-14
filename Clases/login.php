<?php
	class login{
		var $db;
		public function conectar(){
			$this->db = new PDO('mysql:host=localhost;dbname=boxit;charset=utf8', 'root', 'root');
		}	

		public function logIn($username,$password){
			$cons = $this->db->prepare("SELECT * FROM usuarios WHERE username = :campo2 AND password = :campo1 ");
			$cons -> bindValue(':campo1',$username,PDO::PARAM_STR);
			$cons -> bindValue(':campo2',$password,PDO::PARAM_STR);
			$cons->execute();
			return $cons->fetchColumn();
		}
	}
?>