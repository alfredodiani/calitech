<?php
	class Passagem{
		var $idpassagem;
		var $iduser;
		var $idvoo;
		var $numAssento;
		
		function __construct($vidpassagem, $viduser, $vidvoo, $vnumAssento, $vdatadesembarque, $vprefixoaviao) {
			$this->idpassagem = $vidpassagem;
			$this->iduser = $viduser;
			$this->idvoo = $vidvoo;
			$this->numAssento = $vnumAssento;
		}
		
		function imprimir() {
			echo "ID da Passagem: ".($this->idpassagem)."<br />ID do Usuario: ".($this->iduser)."<br />ID do Voo: ".($this->idvoo)."<br />Numero do Assento: ".($this->numassento)."<br />";
		}
		
		function getIdPassagem() {return $this->idpassagem;}
		function getIdUser() {return $this->iduser;}
		function getIdVoo() {return $this->idvoo;}
		function getNumAssento() {return $this->numassento;}
		
		function setIdPassagem($vidpassagem) {$this->idpassagem = $vidpassagem;}
		function setIdUser($viduser) {$this->iduser = $viduser;}
		function setIdVoo($vidvoo) {$this->idvoo = $vidvoo;}
		function setNumAssento($vnumassento) {$this->numassento = $vnumassento;}
	}
?>