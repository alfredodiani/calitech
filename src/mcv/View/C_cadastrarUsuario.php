<?php

//$idUsuario= $_POST['cUser'];
$nome = $_POST['cNome'];
$rg= $_POST['cRg'];
$nascimento = $_POST['cDataNascimento'];
$email= $_POST['cEmail'];
$senha= $_POST['cSenha'];

echo "<html><body><h1>"
.$nome."  ".$nascimento.
	
	"</h1> <body></html>";

$servidor= "localhost"; 
$username= "root";
$password= "";
$bd= "usuario";
	
$conexaoInserir = mysqli_connect($servidor, $username, $password, $bd);


	if(! $conexaoInserir){
		die("conexao falhou ".$conexaoInserir->connect_error);
	}


$inserirSQL= "INSERT INTO usuario(nome, rg, nascimento, email, senha) VALUES ('$nome','$rg','$nascimento','$email','$senha')";

if ( $conexaoInserir->query($inserirSQL) == TRUE){
	echo "cliente salvo";
}
	else {
		echo "falha <br>" .$conexaoInserir->error;
	}
	
?>

