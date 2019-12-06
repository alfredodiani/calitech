<?php
	include_once("../model/Usuario.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/UsuarioDAO.php");
	$usuario = new Usuario($_POST["vnome"], $_POST["vnasc"], $_POST["vemail"], $_POST["vlogin"], $_POST["vsenha"]);

	$conexao = new Connection();
	$conexao->conectar();
	
	$usuariodao = new UsuarioDAO();
	$usuariodao->cadastrar($usuario, $conexao->getLink());
	/*$resultado = $clientedao->cadastrar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);*/
	

?>