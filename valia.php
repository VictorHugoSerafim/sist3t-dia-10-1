<?php

include_once 'conexao.php';
session_start();
ob_start();

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin){
	$username = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($username)) AND (!empty($password))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: index.php");
                <a href="index.html"></a>
			}else{
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}
?>


<!-- 
	// include_once 'conexao.php';
	// session_start();

		
	// $email = $_POST['email'];
	// $senha = $_POST['senha'];

	// $sql = "SELECT * FROM usuarios WhERE email = '$email' and senha = '$senha'";

	// $result = $conn->query($sql);

	// if(mysqli_num_rows($result) < 1)
	// {
		
	// }else
	// {
	// 	header("location: seusItens.php");
	// }

	
// $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

// if($btnLogin){
// 	$username = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
// 	$password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
// 	//echo "$usuario - $senha";
// 	if((!empty($username)) AND (!empty($password))){
// 		//Gerar a senha criptografa
// 		//echo password_hash($senha, PASSWORD_DEFAULT);
// 		//Pesquisar o usuário no BD
// 		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
// 		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
// 		if($resultado_usuario){
// 			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
// 			if(password_verify($senha, $row_usuario['senha'])){
// 				$_SESSION['id'] = $row_usuario['id'];
// 				$_SESSION['nome'] = $row_usuario['nome'];
// 				$_SESSION['email'] = $row_usuario['email'];
// 				header("Location: index.php");
//                 <a href="index.html"></a>
// 			}else{
// 				header("Location: index.php");
// 			}
// 		}
// 	}else{
// 		$_SESSION['msg'] = "Login e senha incorreto!";
// 		header("Location: login.php");
// 	}
// }else{
// 	$_SESSION['msg'] = "Página não encontrada";
// 	header("Location: login.php");
// } -->
