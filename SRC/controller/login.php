<?php
	include_once("../persistence/UsuarioDAO.php");
	include_once("../persistence/AdminDAO.php");
	include_once("../persistence/Connection.php");
	
	$login = $_POST["clogin"];
	$senha = $_POST["csenha"];
	$tipouser = $_POST["ctipouser"];
	
	$conexao = new Connection();
	$conexao->conectar();
	
	if ($tipouser == 'u'){
	
		$usuariodao = new UsuarioDAO();
		if($usuariodao->login($login, $senha,$conexao->getLink())){
			//printar html para redirecionar para a pagina HOME Usuario
			echo "<!DOCTYPE html>
					<html>
						<head>
							<link rel=\"icon\" href=\"./favicon.png\">
							<meta http-equiv=\"refresh\" content=\"0; URL='../view/emconstrucao.html'\"/>
						</head>
					</html>";
		}else{
			//pintar html de erro de login
			echo "<!DOCTYPE html>
					<html>
						<h3>Login ou senha incorretos</h3>
						<a href=\"../index.html\">VOLTAR</a>
					</html>";
		}
	}else{
		$admindao = new AdminDAO();
		if($admindao->login($login, $senha,$conexao->getLink())){
			//printar html para redirecionar para a pagina HOMEdoAdmin
			echo "<!DOCTYPE html>
					<html>
						<head>
							<link rel=\"icon\" href=\"./favicon.png\">
							<meta http-equiv=\"refresh\" content=\"0; URL='../view/HomeADM.html'\"/>
						</head>
					</html>";
		}else{
			//pintar html de erro de login
			echo "<!DOCTYPE html>
					<html>
						<h3>Login ou senha incorretos</h3>
						<a href=\"../index.html\">VOLTAR</a>
					</html>";
		}
	}
	
	$conexao->fechar();
	
?>