<?php
	include_once("../model/Usuario.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/UsuarioDAO.php");

	$conexao = new Connection();
	$conexao->conectar();
	
	$usuariodao = new UsuarioDAO();
	$usuariodao->logar($_GET["vemail"], $_GET["vsenha"], $conexao->getLink());
	

?>