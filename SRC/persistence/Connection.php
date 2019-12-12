<?php
	class Connection {
		//variaveis para a conexao
		var $servidor = 'localhost';
		var $user = 'root';
		var $pwd = '';
		var $bd = 'sirepae';
		var $link;
		
		//construtor
		function __construct() {
		}
		
		//conecta com o banco e retorna o link de conexao
		function conectar() {
			if(!$this->link) {
				$this->link = mysqli_connect($this->servidor, $this->user, $this->pwd, $this->bd);
				if(!$this->link) {die("ERRO! N&Atilde;O FOI POSS&Iacute;VEL CONECTAR NO BD.<br />");}
			}
		}
		
		//fecha conexão com o banco
		function fechar() {mysqli_close($this->link);}
		
		//retorna o objeto de conexao com o banco para ser usado nos CRUDs		
		function getLink() {return $this->link;}
	}
?>