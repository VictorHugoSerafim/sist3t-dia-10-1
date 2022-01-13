<?php

if(isset($_POST['btnCadUsuario'])){
		
include_once 'conexao.php';			
	
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$telefone = addslashes($_POST['telefone']);

	$sql = $pdo->prepare("INSERT INTO 'usuarios' VALUES(null,?,?,?)");
	$sql->execute(array($nome,$email,$senha,$telefone));
	header("Location: pagamento.php");

}

?>
