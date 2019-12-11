<?php
	include_once("../persistence/AviaoDAO.php");
	include_once("../persistence/Connection.php");
	
	$prefixo = $_POST["cprefixo"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$aviaodao = new AviaoDAO();
	$aviaodao->excluir($prefixo,$conexao->getLink());
	
	$conexao->fechar();
	
?>