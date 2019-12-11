<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/AviaoDAO.php");



	$conexao = new Connection();
	$conexao->conectar();

	$aviaodao = new AviaoDAO();
	$resultado = $aviaodao->consultarTodos($conexao->getLink());
	
	if($resultado->num_rows > 0) {
		echo "";
		echo "<table style=\"width:100%\">";
		echo "  <tr>";
		echo "    <th>Prefixo</th>";
		echo "    <th>Modelo</th>";
		echo "    <th>Marca</th>";
		echo "    <th>Assentos</th>";
		echo "    <th></th>";
		echo "    <th></th>";
		echo "  </tr>";
		while($linha = $resultado->fetch_assoc()){
			echo "  <tr>";
			echo "    	<td>".$linha['prefixoAviao']."</td>";
			echo "    	<td>".$linha['modelo']."</td>";
			echo "    	<td>".$linha['fabricante']."</td>";
			echo "    	<td>".$linha['qtdAssentos']."</td>";
			echo " 		<td><a href=\"mostrarAviao.php?id=".$linha['prefixoAviao']."\">Alterar</a></td>";
			echo " 		<td><a href=\"excluirAviao.php?id=".$linha['prefixoAviao']."\">Excluir</a></td>";
			echo "  </tr>";
		}
		echo "</table>";
	}else{
		echo "<h3>Nenhum avião cadastrado</h3>";
	}
?>