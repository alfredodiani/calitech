<?php
	require_once('SRC\model\Aviao.php');
	
	class TestAviao extends PHPUnit\Framework\TestCase{
		
		public function testConstrutor(){
			$obj = new aviao("1234", "medio", "tam", "60");
			$this->assertEquals("1234", $obj->getPrefixo(), "falha prefixo");
			$this->assertEquals("medio", $obj->getModelo(), "falha modelo");
			$this->assertEquals("tam", $obj->getFabricante(), "falha fabricante");
			$this->assertEquals("60", $obj->getQtdAssentos(), "falha assentos");
		}
	}
?
