<?php
	include_once("../model/Usuario.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/UsuarioDAO.php");

	$conexao = new Connection();
	$conexao->conectar();

	echo $_POST["vnome"];
	echo "<br>";
	echo $_POST["vnasc"];
	echo "<br>";
	echo $_POST["vemail"];
	echo "<br>";
	echo $_POST["vemail"];
	echo "<br>";
	echo $_POST["vsenha"];

	
	$usuario = new Usuario($_POST["vnome"], $_POST["vnasc"], $_POST["vemail"], $_POST["vemail"], $_POST["vsenha"]);

	
	$usuariodao = new UsuarioDAO();
	$usuariodao->cadastrar($usuario, $conexao->getLink());
	/*$resultado = $clientedao->cadastrar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);*/
	

?>