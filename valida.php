<?php
$mysqli_connection = new MySQLi('uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'sk219jft4qfiwql9', 'sk219jft4qfiwql9', 'ppmnzoters1z67jj');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
?>
