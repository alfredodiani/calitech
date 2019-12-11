<?php
	include_once("../persistence/Connection.php");
	include_once("../persistence/PassagemDAO.php");



	$conexao = new Connection();
	$conexao->conectar();

	$passagemdao = new PassagemDAO();
	$resultado = $passagemdao->consultarTodos($conexao->getLink());
	
	if($resultado->num_rows > 0) {
		echo "";
		echo "<table style=\"width:100%\">";
		echo "  <tr>";
		echo "    <th>Nome do Usuário</th>";
		echo "    <th>ID da Passagem</th>";
		echo "    <th>Numero do Assento</th>";
		echo "    <th>ID do Voo</th>";
		echo "    <th>Data de Embarque</th>";
		echo "    <th>Origem</th>";
		echo "    <th>Destino</th>";
		echo "    <th>Prefixo da aeronave</th>";
		echo "    <th>Modelo</th>";
		echo "    <th>Fabricante</th>";
		echo "    <th></th>";
		echo "    <th></th>";
		echo "  </tr>";
		while($linha = $resultado->fetch_assoc()){
			echo "  <tr>";
			echo "    	<td>".$linha['nomeUser']."</td>";
			echo "    	<td>".$linha['idPassagem']."</td>";
			echo "    	<td>".$linha['numAssento']."</td>";
			echo "    	<td>".$linha['idVoo']."</td>";
			echo "    	<td>".$linha['dataEmbarque']."</td>";
			echo "    	<td>".$linha['origem']."</td>";
			echo "    	<td>".$linha['destino']."</td>";
			echo "    	<td>".$linha['prefixoAviao']."</td>";
			echo "    	<td>".$linha['modelo']."</td>";
			echo "    	<td>".$linha['fabricante']."</td>";
			echo " 		<td><a href=\"mostrarPassagem.php?id=".$linha['idPassagem']."\">Alterar</a></td>";
			echo " 		<td><a href=\"excluirPassagem.php?id=".$linha['idPassagem']."\">Excluir</a></td>";
			echo "  </tr>";
		}
		echo "</table>";
	}else{
		echo "<h3>Nenhuma Passagem cadastrada</h3>";
	}
?>