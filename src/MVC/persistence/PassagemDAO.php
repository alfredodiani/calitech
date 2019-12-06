<?php
	include_once("../model/Passagem.php");

	class PassagemDAO {
		function cadastrar($passagem, $link) {
			$query = "INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) values (".($passagem->getIdPassagem()).","
			.($passagem->getIdUser()).",".($passagem->getIdVoo()).",".($passagem->getNumAssento()).")";
			echo $query;
			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../View/cadastrarPassagem.html\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../View/buscarPassagem.html\">VOLTAR</a>";
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM Passagem WHERE idPassagem=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. PASSAGEM NÃO EXCLUIDA.<br /><br /><a href=\"../view/excluirPassagem.html\">VOLTAR</a>");
			}
			echo "PASSAGEM EXCLUIDA.<br /><br /><a href=\"../view/excluirPassagem.html\">VOLTAR</a>";
		}
		
		function consultar($cod, $link) {
			$query = "SELECT * FROM Passagem WHERE idPassagem=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. PASSAGEM NÃO ENCONTRADA.<br /><br /><a href=\"../view/buscarPassagem.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarTodos($link) {
			$query = "SELECT * FROM Passagem";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUMA PASSAGEM ENCONTRADA.<br /><br /><a href=\"../view/buscarPassagem.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarTodosUser($cod, $link) {
			$query = "SELECT * FROM Passagem WHERE idUser=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUMA PASSAGEM ENCONTRADA PARA ESSE USUARIO.<br /><br /><a href=\"../view/buscarPassagem.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($passagem, $link) {
			$query = "UPDATE Passagem SET idPassagem=".($passagem->getIdPassagem()).", idUser='".($passagem->getIdUser()).
			", idvoo=".($passagem->getIdVoo()).", numAssento=".($passagem->getNumAssento())." WHERE idPassagem=".$passagem->getIdPassagem();
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarPassagem.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarPassagem.html\">VOLTAR</a>";
		}
	}
?>