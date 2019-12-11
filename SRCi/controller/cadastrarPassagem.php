<?php
	include_once("../model/Passagem.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/PassagemDAO.php");


	$passagem = new Passagem($_POST["cidpassagem"], $_POST["ciduser"], $_POST["cidvoo"],$_POST["cqtdassentos"]);

	echo "<br>";
	echo "<br>";
	$passagem->imprimir();

	$conexao = new Connection();
	$conexao->conectar();

	$passagemdao = new PassagemDAO();
	$passagemdao->cadastrar($passagem, $conexao->getLink());
	
	$conexao->fechar();
?>