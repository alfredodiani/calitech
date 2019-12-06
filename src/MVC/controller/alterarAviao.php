<?php
	include_once("../model/Aviao.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/AviaoDAO.php");

	$conexao = new Connection();
	$conexao->conectar();

	echo $_POST["vId"];
	echo "<br>";
	echo $_POST["vMarca"];
	echo "<br>";
	echo $_POST["vModelo"];
	echo "<br>";
	echo $_POST["vCap"];


	$aviao = new Aviao($_POST["vId"], $_POST["vModelo"], $_POST["vMarca"], $_POST["vCap"]);

	$aviaodao = new AviaoDAO();
	$aviaodao->alterar($aviao, $conexao->getLink());
	/*$resultado = $clientedao->cadastrar($_POST["codigo"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);*/
	

?>