<?php
	include_once("../model/Usuario.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/UsuarioDAO.php");

	$usuario = new Usuario(null, $_POST["nome"], $_POST["nascimento"], $_POST["salario"]);
	
	$conexao = new Connection("localhost","root","","calitech");
	$conexao->conectar();
	
	$usuariodao = new UsuarioDAO();
	$usuariodao->cadastrar($usuario, $conexao->getLink());
	/*$resultado = $clientedao->cadastrar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);*/
	

?>