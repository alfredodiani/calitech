<?php
	include_once("../persistence/AviaoDAO.php");
	include_once("../persistence/Connection.php");
	
	$aviao = new aviao($_POST["cprefixo"],$_POST["cmodelo"],$_POST["cfabricante"],$_POST["cqtdassentos"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$aviaodao = new AviaoDAO();
	$aviaodao->alterar($aviao,$conexao->getLink());
	
	$conexao->fechar();
	
?>