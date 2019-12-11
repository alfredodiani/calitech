<?php
	class Voo{
		var $idvoo;
		var $origem;
		var $destino;
		var $dataembarque;
		var $datadesembarque;
		var $prefixoaviao;
		
		function __construct($vidvoo, $vorigem, $vdestino, $vdataembarque, $vdatadesembarque, $vprefixoaviao) {
			$this->idvoo = $vidvoo;
			$this->origem = $vorigem;
			$this->destino = $vdestino;
			$this->dataembarque = $vdataembarque;
			$this->datadesembarque = $vdatadesembarque;
			$this->prefixoaviao = $vprefixoaviao;
		}
		
		function imprimir() {
			echo "ID do Voo: ".($this->idvoo)."<br />Origem: ".($this->origem)."<br />Destino: ".($this->destino)."<br />Data de Embarque: ".($this->dataembarque)."<br />"."<br />Data de Desembarque: ".($this->datadesembarque)."<br />"."<br />Prefixo do Aviao: ".($this->prefixoaviao)."<br />";
		}
		
		function getIdVoo() {return $this->idvoo;}
		function getOrigem() {return $this->origem;}
		function getDestino() {return $this->destino;}
		function getDataEmbarque() {return $this->dataembarque;}
		function getDataDesembarque() {return $this->datadesembarque;}
		function getPrefixoAviao() {return $this->prefixoaviao;}
		
		function setIdVoo($vidvoo) {$this->idvoo = $vidvoo;}
		function setOrigem($vorigem) {$this->origem = $vorigem;}
		function setDestino($vdestino) {$this->destino = $vdestino;}
		function setDataEmbarque($vdataembarque) {$this->dataembarque = $vdataembarque;}
		function setDataDesembarque($vdatadesembarque) {$this->datadesembarque = $vdatadesembarque;}
		function setPrefixoAviao($vprefixoaviao) {$this->prefixoaviao = $vprefixoaviao;}
	}
?>