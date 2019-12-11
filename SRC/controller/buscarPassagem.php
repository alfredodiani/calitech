<?php
	include_once("../persistence/PassagemDAO.php");
	include_once("../persistence/Connection.php");
	
	$idpassagem = $_POST["cidpassagem"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$passagemdao = new PassagemDAO();
	$passagemdao->excluir($idpassagem,$conexao->getLink());
	
	$conexao->fechar();
?>