<?php
	class Usuario{
		var $idUsuario;
		var $nome;
		var $nascimento;
		var $rg;
		var $email;
		var $senha;
		
		function __construct($vUser, $vNome, $vNascimento, $vRg, $vEmail, $vSenha) {
			$this->idUsuario= $vUser;
			$this->nome = $vNome;
			$this->nascimento = $vNascimento;
			$this->rg = $vRg;
			$this->email= $vEmail;
			$this->senha= $vSenha;
		}
		
		function imprimir() {
			echo "Codigo: ".($this->codigo)."<br />Nome: ".($this->nome)."<br />Nascimento: ".($this->nascimento)."<br />Sal&aacute;rio: ".($this->salario)."<br />";
		}
		
		function getidUsuario() {return $this->idUsuario;}
		function getNome() {return $this->nome;}
		function getNascimento() {return $this->nascimento;}
		function getRg() {return $this->rg;}
		function getEmail() {return $this->email;}
		function getSenha() {return $this->senha;}

		
		function setidUsuario($vUser) {$this->idUsuario= $vUser;}
		function setNome($vNome) {$this->nome = $vNome;}
		function setNascimento($vNasc) {$this->nascimento = $vNasc;}
		function setRg($vRg) {$this->rg = $vRg;}
		function setEmail($vEmail) {$this->email= $vEmail;}
		function setSenha($vSenha) {$this->senha= $vSenha;}
		
		
	}
?>
