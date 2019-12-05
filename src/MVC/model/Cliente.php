<?php
	class Cliente{
		var $codigo;
		var $nome;
		var $nascimento;
		var $salario;
		
		function __construct($vcodigo, $vnome, $vnasc, $vsal) {
			$this->codigo = $vcodigo;
			$this->nome = $vnome;
			$this->nascimento = $vnasc;
			$this->salario = $vsal;
		}
		
		function imprimir() {
			echo "Codigo: ".($this->codigo)."<br />Nome: ".($this->nome)."<br />Nascimento: ".($this->nascimento)."<br />Sal&aacute;rio: ".($this->salario)."<br />";
		}
		
		function getCodigo() {return $this->codigo;}
		function getNome() {return $this->nome;}
		function getNascimento() {return $this->nascimento;}
		function getSalario() {return $this->salario;}
		
		function setCodigo($vcodigo) {$this->codigo = $vcodigo;}
		function setNome($vnome) {$this->nome = $vnome;}
		function setNascimento($vnasc) {$this->nascimento = $vnasc;}
		function setSalario($vsal) {$this->salario = $vsal;}
	}
?>