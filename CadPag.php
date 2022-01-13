<?php
include_once 'conexao.php';

if(isset($_POST['btnCadDados'])){
	$paymentMethod = addslashes($_POST['paymentMethod']);
	$nomeCartao = addslashes($_POST['nomeCartao']);
	$numeroCartao = addslashes($_POST['numeroCartao']);
	$vencimento = addslashes($_POST['vencimento']);
    $cvc = addslashes($_POST['cvc']);

	$sql = $pdo->prepare("INSERT INTO 'pagamento' VALUES(null,?,?,?,?,?)");
	$sql->execute(array($paymentMethod,$nomeCartao,$numeroCartao,$vencimento,$cvc));
	header("Location: itens.php");

}

?>