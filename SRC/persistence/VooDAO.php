<?php
	include_once("../model/Voo.php");

	class VooDAO {
		function cadastrar($voo, $link) {
			$query = "INSERT INTO Voo (idvoo, origem, destino, dataembarque, datadesembarque, prefixoaviao) values (".($voo->getIdVoo()).",'"
			.($voo->getOrigem())."','".($voo->getDestino())."','".($voo->getDataEmbarque())."','".($voo->getDataDesembarque()).
			"','".($voo->getPrefixoAviao())."')";
			echo $query;
			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../View/cadastrarVoo.html\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../View/buscarVoo.html\">VOLTAR</a>";
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM Voo WHERE idvoo=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. VOO NÃO EXCLUIDO.<br /><br /><a href=\"../view/excluirVoo.html\">VOLTAR</a>");
			}
			echo "VOO EXCLUIDO.<br /><br /><a href=\"../view/excluirVoo.html\">VOLTAR</a>";
		}
		
		function consultar($cod, $link) {
			$query = "SELECT * FROM Voo WHERE idvoo=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. Voo NÃO ENCONTRADO.<br /><br /><a href=\"../view/buscarVoo.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarTodos($link) {
			$query = "SELECT * FROM Voo";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUM VOO ENCONTRADO.<br /><br /><a href=\"../view/buscarVoo.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($Voo, $link) {
			$query = "UPDATE Voo SET idvoo='".($voo->getIdVoo())."', origem='".($voo->getOrigem()).
			"', destino='".($voo->getDestino())."', dataembarque='".($voo->getDataEmbarque())."', datadesembarque='".($voo->getDataDesembarque()).
			"', prefixoaviao='".($voo->getPrefixoAviao())."' WHERE prefixo=".$aviao->getPrefixo();
			
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarVoo.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarVoo.html\">VOLTAR</a>";
		}
	}
?>