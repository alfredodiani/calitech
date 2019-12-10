<?php
	include_once("../model/Aviao.php");
	include_once("../persistence/AviaoDAO.php");
	include_once("../persistence/Connection.php");
	
	$prefixo = $_GET["id"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$aviaodao = new AviaoDAO();
	$resultado = $aviaodao->consultar($prefixo, $conexao->getLink());
	$conexao->fechar();
	if($resultado->num_rows > 0) {
		$linha = $resultado->fetch_assoc();
		$aviao= new aviao($linha['prefixoAviao'],$linha['modelo'],$linha['fabricante'],$linha['qtdAssentos']);
	
		echo "<h1>Aeronave</h1>";
		echo "<form action='../controller/alterarAviao.php' method='POST'>";
		echo "	Prefixo da Aeronave:<br>";
		echo "	<input type='text' name='cprefixo' value=".$aviao->getPrefixo()." readonly><br>";
		echo "	Modelo:<br>";
		echo "	<input type='text' name='cmodelo' value=".$aviao->getModelo()."><br>";
		echo "	Fabricante:<br>";
		echo "	<input type='text' name='cfabricante' value=".$aviao->getFabricante()."><br>";
		echo "	Quantidade de Assentos:<br>";
		echo "	<input type='number' name='cqtdassentos' value=".$aviao->getQtdAssentos()."><br>";
		echo "	<br>";
		echo "	<input type='submit' value='Alterar'>";
		echo "  <input type='button' onclick=\"window.location.href = './excluirAviao.php?id=".$aviao->getPrefixo()."';\" value='Excluir'/>"; 
/*		"./excluirAviao.php?id=".$aviao->getPrefixo() */
		echo "  <input type='button' onclick=\"window.location.href = './listarAviao.php';\" value='Voltar'/>";
		
		echo "</form>";
	}else{
		echo "<h3>Nenhum avião cadastrado com esse prefixo.</h3>";
		echo "  <input type='button' onclick=\"window.location.href = './listarAviao.php';\" value='Voltar'/>";
	}
	
?>