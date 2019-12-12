<?php
	include_once("../model/Passagem.php");
	

	class PassagemDAO {
		
		//cadastra uma passagem no banco de dados
		function cadastrar($passagem, $link) {
			$query = "INSERT INTO Passagem (idPassagem, idUser, idVoo, numAssento) values (".($passagem->getIdPassagem()).","
			.($passagem->getIdUser()).",".($passagem->getIdVoo()).",".($passagem->getNumAssento()).")";
			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>";
		}
		
		//exclui uma passagem no banco de dados
		function excluir($cod, $link) {
			$query = "DELETE FROM Passagem WHERE idPassagem=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. PASSAGEM NÃO EXCLUIDA.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");
			}
			echo "PASSAGEM EXCLUIDA.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>";
		}
		
		//consulta uma passagem e a retorna 
		function consultar($cod, $link) {
			$query = "SELECT * FROM Passagem WHERE idPassagem=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. PASSAGEM NÃO ENCONTRADA.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		//consulta e retorna todas passagens do banco de dados com as informaçoes relevantes de usuario, de voo e de aviao
		function consultarTodos($link) {
			$query = "Select U.nomeUser, P.idPassagem, P.numAssento, V.idVoo, V.dataEmbarque, V.origem, V.destino, A.prefixoAviao, A.modelo, A.fabricante
						from Usuario U, Passagem P, Voo V, Aviao A
						Where U.idUser = P.idUser AND P.idVoo = V.idVoo AND V.prefixoAviao = A.prefixoAviao;";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUMA PASSAGEM ENCONTRADA.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		//consulta todas as passagens de um dado usuario recebe IDUser
		function consultarTodosUser($cod, $link) {
			$query = "SELECT * FROM Passagem WHERE idUser=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUMA PASSAGEM ENCONTRADA PARA ESSE USUARIO.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");
			}
			return $result;
		}
		
		//faz update de uma passagem no BD
		function alterar($passagem, $link) {
			$query = "UPDATE Passagem SET idPassagem=".($passagem->getIdPassagem()).", idUser=".($passagem->getIdUser()).
			", idvoo=".($passagem->getIdVoo()).", numAssento=".($passagem->getNumAssento())." WHERE idPassagem=".$passagem->getIdPassagem();
			
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../controller/listarPassagem.php\">VOLTAR</a>";
		}
	}
?>