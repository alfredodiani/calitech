<?php
	include_once("SRC/model/Aviao.php");
	include_once("SRC/persistence/Connection.php");
	include_once("SRC/persistence/AviaoDAO.php");

	class TesteCadastrarAviao extends PHPUnit\Framework\TestCase{
		
		public function TesteCadastrarAviao(){
		
			$objConn = new Connection();
			$objConn->conectar();
			$conn = $objConn->getLink();
			
			$obj = new Aviao("1234", "medio", "tam", "60");
			$objAviao= new aviaoDAO();
			$objAviao->cadastrar($obj, $conn);
			
			$res = $conn->query("SELECT cprefixo, cmodelo, cfabricante, cqtdassentos, FROM aviao WHERE cprefixo='1234'");
			$reg = $res->fetch_assoc();
			
			$this->assertEquals("1234", $reg['cprefixo'], "prefixo errado");
			$this->assertEquals("medio", $reg['cmodelo'], "modelo errado");
			$this->assertEquals("tam", $reg['cfabricante'], " fabricante errada");
			$this->assertEquals("60", $reg['cqtdassentos'], "qnt assentos errado");
		}
	}
?>
