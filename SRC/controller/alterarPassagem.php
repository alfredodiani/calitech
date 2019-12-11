<?php
	include_once("../persistence/PassagemDAO.php");
	include_once("../persistence/Connection.php");
	
	$passagem = new Passagem($_POST["cidpassagem"],$_POST["ciduser"],$_POST["cidvoo"],$_POST["cnumassento"]);
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$passagemdao = new PassagemDAO();
	$passagemdao->alterar($passagem,$conexao->getLink());
	
	$conexao->fechar();
	
?>