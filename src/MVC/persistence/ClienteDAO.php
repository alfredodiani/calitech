<?php
	include_once("../model/Cliente.php");

	class ClienteDAO {
		function cadastrar($cliente, $link) {
			$query = "INSERT INTO cliente (nome,nascimento,salario) values ('".($cliente->getNome())."','".($cliente->getNascimento())."',".($cliente->getSalario()).")";

			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/cadastrarCliente.html\">VOLTAR</a>";
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM CLIENTE WHERE ID=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. CLIENTE NÃO EXCLUIDO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			echo "CLIENTE EXCLUIDO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>";
		}
		
		function consultar($cod, $link) {
			$query = "SELECT * FROM CLIENTE WHERE ID=".($cod);
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. CLIENTE NÃO ENCONTRADO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function consultarN($nasc, $link) {
			$query = "SELECT * FROM CLIENTE WHERE nascimento>='".($nasc)."'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUM CLIENTE ENCONTRADO.<br /><br /><a href=\"../view/excluirCliente.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($cliente, $link) {
			$query = "update cliente set nome='".($cliente->getNome())."', nascimento='".($cliente->getNascimento())."', salario=".($cliente->getSalario())." WHERE ID=".$cliente->getCodigo();
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>";
		}
	}
?>