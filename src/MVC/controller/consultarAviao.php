<?php
	include_once("../model/Aviao.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/AviaoDAO.php");

	$conexao = new Connection();
	$conexao->conectar();

	echo $_GET["id"];
	echo "<br>";

	
	$aviaodao = new AviaoDAO();
	$resultado = $aviaodao->consultar($_GET["id"], $conexao->getLink());
	$linha = mysqli_fetch_row($resultado);
	echo " <form method=\"post\" action=\"alterarAviao.php\">";
	echo "			<div>";
	echo "			<div>";
	echo "				<span >Id</span>";
	echo "				<input type=\"text\" name=\"vId\" value=\"".$linha[0]."\">";
	echo "				<span ></span>";
	echo "			</div>";
	echo "			<div>";
	echo "				<span >Marca</span>";
	echo "				<input type=\"text\" name=\"vMarca\" value=\"".$linha[2]."\">";
	echo "				<span ></span>";
	echo "			</div>";
	echo "			<div>";
	echo "				<span >Modelo</span>";
	echo "				<input type=\"text\" name=\"vModelo\" value=\"".$linha[1]."\">";
	echo "				<span ></span>"			;
	echo "			</div>";
	echo "			<div>";
	echo "				<span >Capacidade máxima</span>";
	echo "				<input type=\"text\" name=\"vCap\"  value=\"".$linha[3]."\">";
	echo "				<span ></span>";
	echo "			</div>";
	echo "			<button type=\"submit\">";
	echo "					<span>";
	echo "						Alterar Aviao";
	echo "					</span>";
	echo "			</button>";
	echo "  </form>";
	

?>