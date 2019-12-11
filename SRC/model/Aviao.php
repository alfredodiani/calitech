<?php
	class Aviao{
		var $prefixo;
		var $modelo;
		var $fabricante;
		var $qtdAssentos;

		
		function __construct($vprefixo, $vmodelo, $vfabricante, $vqtdAssentos) {
			$this->prefixo = $vprefixo;
			$this->modelo = $vmodelo;
			$this->fabricante = $vfabricante;
			$this->qtdAssentos = $vqtdAssentos;
		}
		
		function imprimir() {
			echo "Prefixo: ".($this->prefixo)."<br />Modelo: ".($this->modelo)."<br />Fabricante: ".($this->fabricante)."<br />Quantidade de Assentos: ".($this->qtdAssentos)."<br />";
		}
		
		function getPrefixo() {return $this->prefixo;}
		function getModelo() {return $this->modelo;}
		function getFabricante() {return $this->fabricante;}
		function getQtdAssentos() {return $this->qtdAssentos;}
		
		function setPrefixo($vprefixo) {$this->prefixo = $vprefixo;}
		function setModelo($vmodelo) {$this->modelo = $vmodelo;}
		function setFabricante($vfabricante) {$this->fabricante = $vfabricante;}
		function setQtdAssentos($vqtdAssentos) {$this->qtdAssentos = $vQtdAssentos;}
	}
?>