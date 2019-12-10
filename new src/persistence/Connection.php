<?php
	class Connection {
		var $servidor = 'localhost';
		var $user = 'root';
		var $pwd = '';
		var $bd = 'sirepae';
		var $link;
		
		function __construct() {
		}
		
		function conectar() {
			if(!$this->link) {
				$this->link = mysqli_connect($this->servidor, $this->user, $this->pwd, $this->bd);
				if(!$this->link) {die("ERRO! N&Atilde;O FOI POSS&Iacute;VEL CONECTAR NO BD.<br />");}
			}
		}
		
		function fechar() {mysqli_close($this->link);}
		
		function getLink() {return $this->link;}
	}
?>