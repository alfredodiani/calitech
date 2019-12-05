<?php
	class Connection {
		var $servidor;
		var $user;
		var $pwd;
		var $bd;
		var $link;
		
		function __construct($vservidor, $vuser, $vpwd, $vbd) {
			$this->servidor = $vservidor;
			$this->user = $vuser;
			$this->pwd = $vpwd;
			$this->bd = $vbd;
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