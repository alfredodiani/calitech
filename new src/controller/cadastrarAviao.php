<?php
	include_once("../model/Aviao.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/AviaoDAO.php");


/*
	echo $_POST["cprefixo"];
	echo "<br>";
	echo $_POST["cmodelo"];
	echo "<br>";
	echo $_POST["cfabricante"];
	echo "<br>";
	echo $_POST["cqtdassentos"];
*/

	$aviao = new Aviao($_POST["cprefixo"], $_POST["cmodelo"], $_POST["cfabricante"], $_POST["cqtdassentos"]);

	$conexao = new Connection();
	$conexao->conectar();

	$aviaodao = new AviaoDAO();
	$aviaodao->cadastrar($aviao, $conexao->getLink());
	
	$conexao->fechar();
?>