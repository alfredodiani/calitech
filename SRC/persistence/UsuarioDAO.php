<?php
	include_once("../model/Usuario.php");

	class UsuarioDAO {
		function cadastrar($usuario, $link) {
			$query = "INSERT INTO Usuario (nomeUser, nascimento, email, login, senha) values ('".($usuario->getNome())."','".($usuario->getNascimento())."','".($usuario->getEmail())
			."','".($usuario->getLogin())."','".($usuario->getSenha())."')";
			echo $query;
			if(!mysqli_query($link, $query)) {die("ERRO! NÃO SALVOU OS DADOS.<br /><br /><a href=\"../View/cadastrarUsuario.html\">VOLTAR</a>");}
			echo "DADOS SALVOS.<br /><br /><a href=\"../View/buscarVoo.html\">VOLTAR</a>";
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM Usuario WHERE ID=".($cod);
			if(!mysqli_query($link, $query)) {
				die("ERRO. Usuario NÃO EXCLUIDO.<br /><br /><a href=\"../view/excluirUsuario.html\">VOLTAR</a>");
			}
			echo "USUARIO EXCLUIDO.<br /><br /><a href=\"../view/excluirUsuario.html\">VOLTAR</a>";
		}
		
		
		//verifica se o login e senha estão presentes no BD e retorna true ou false
		function login($login, $senha, $link) {
			$query = "SELECT * FROM Usuario U WHERE U.login= '".($login)."' AND U.senha='".($senha)."'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. Usuario NÃO ENCONTRADO.<br /><br /><a href=\"../view/excluirUsuario.html\">VOLTAR</a>");
			}else{
				if($result->num_rows > 0) {
					return true;
				}else{
					return false;
				}
			}
		}
		
		function consultarN($nasc, $link) {
			$query = "SELECT * FROM Usuario WHERE nascimento>='".($nasc)."'";
			$result = mysqli_query($link, $query);
			if(!$result) {
				die("ERRO. NENHUM Usuario ENCONTRADO.<br /><br /><a href=\"../view/excluirUsuario.html\">VOLTAR</a>");
			}
			return $result;
		}
		
		function alterar($usuario, $link) {
			$query = "update Usuario set nome='".($usuario->getNome())."', nascimento='".($usuario->getNascimento())."', email='".($usuario->getSalario())."',login='".($usuario->getLogin())."'senha='".($usuario->getSenha())."' WHERE ID=".$cliente->getCodigo();
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>");
			}
			echo "DADOS SALVOS.<br /><br /><a href=\"../view/alterarCliente.html\">VOLTAR</a>";
		}
	}
?>