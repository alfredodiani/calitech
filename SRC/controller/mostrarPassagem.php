<?php
	include_once("../model/Passagem.php");
	include_once("../persistence/PassagemDAO.php");
	include_once("../persistence/Connection.php");
	
	$idpassagem = $_GET["id"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	$passagemdao = new PassagemDAO();
	$resultado = $passagemdao->consultar($idpassagem, $conexao->getLink());
	$conexao->fechar();
	if($resultado->num_rows > 0) {
		$linha = $resultado->fetch_assoc();
		$passagem= new Passagem($linha['idPassagem'],$linha['idUser'],$linha['idVoo'],$linha['numAssento']);
	
		echo "<h1>Passagem</h1>";
		echo "<form action='../controller/alterarPassagem.php' method='POST'>";
		echo "	ID da Passagem:<br>";
		echo "	<input type='text' name='cidpassagem' value=".$passagem->getIdPassagem()." readonly><br>";
		echo "	ID do Usuario:<br>";
		echo "	<input type='text' name='ciduser' value=".$passagem->getIdUser()."><br>";
		echo "	ID do Voo:<br>";
		echo "	<input type='text' name='cidvoo' value=".$passagem->getIdVoo()."><br>";
		echo "	Numero do Assento:<br>";
		echo "	<input type='number' name='cnumassento' value=".$passagem->getNumAssento()."><br>";
		echo "	<br>";
		echo "	<input type='submit' value='Alterar'>";
		echo "  <input type='button' onclick=\"window.location.href = './excluirPassagem.php?id=".$passagem->getIdPassagem()."';\" value='Excluir'/>"; 
		echo "  <input type='button' onclick=\"window.location.href = './listarPassagem.php';\" value='Voltar'/>";
		
		echo "</form>";
	}else{
		echo "<h3>Nenhuma passagem cadastrada com esse ID.</h3>";
		echo "  <input type='button' onclick=\"window.location.href = '../controller/listarPassagem.php';\" value='Voltar'/>";
	}
	
?>