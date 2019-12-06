<?php
	include_once("../model/Aviao.php");
	include_once("../persistence/Connection.php");
	include_once("../persistence/AviaoDAO.php");

	$conexao = new Connection();
	$conexao->conectar();


	
	$aviaodao = new AviaoDAO();
	$linhas = $aviaodao->consultarTodos($conexao->getLink());

	if($linhas->num_rows > 0) {
		echo "<table style=\"width:100%\">";
		echo "  <tr>";
		echo "    <th>Id</th>";
		echo "    <th>Modelo</th>";
		echo "    <th>Marca</th>";
		echo "    <th></th>";
		echo "  </tr>";
		while($linha = $linhas->fetch_assoc()){
			/*echo " <form method=\"get\" action=\"consultarAviao.php?id=\"asdasd\"\">";*/
			echo "  <tr>";
			echo "    <td>".$linha['prefixoAviao']."</td>";
			echo "    <td>".$linha['modelo']."</td>";
			echo "    <td>".$linha['fabricante']."</td>";
			echo "    <td>";
			echo "				<a href=\"consultarAviao.php?id=".$linha['prefixoAviao']."\">";
			echo "							Visualizar";
			echo "				</a>";
			echo "	</td>";
			echo "  </tr>";
			/*echo "  </form>";*/
		}
		echo "</table>";
	}

?>