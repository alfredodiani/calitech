<?php
	class Admin{
		var $codigo;
		var $nome;
		var $nascimento;
		var $email;
		var $login;
		var $senha;
		var $cargo;
		
		function __construct($vcodigo, $vnome, $vnasc, $vemail, $vlogin, $vsenha, $vcargo) {
			$this->codigo = $vcodigo;
			$this->nome = $vnome;
			$this->nascimento = $vnasc;
			$this->email = $vemail;
			$this->login = $vlogin;
			$this->senha = $vsenha;
			$this->cargo = $vcargo;
		}
		
		function imprimir() {
			echo "Codigo: ".($this->codigo)."<br />Nome: ".($this->nome)."<br />Cargo: ".($this->cargo)."<br />Nascimento: ".($this->nascimento)."<br />Email: ".($this->email)."<br />"."<br />Login: ".($this->Login)."<br />"."<br />Senha: ".($this->senha)."<br />";
		}
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getNascimento() {return $this->nascimento;}
		function getEmail() {return $this->email;}
		function getLogin() {return $this->login;}
		function getSenha() {return $this->senha;}
		function getCargo() {return $this->cargo;}
		
		function setCodigo($vcodigo) {$this->codigo = $vcodigo;}
		function setNome($vnome) {$this->nome = $vnome;}
		function setNascimento($vnasc) {$this->nascimento = $vnasc;}
		function setEmail($vemail) {$this->email = $vemail;}
		function setLogin($vlogin) {$this->login = $vlogin;}
		function setSenha($vsenha) {$this->senha= $vsenha;}
		function setCargo($vcargo) {$this->cargo = $vcargo;}
	}
?>