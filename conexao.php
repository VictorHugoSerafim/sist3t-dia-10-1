<?php
$servername = "dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$database = "	qdtcpjz1or7zy5km";
$username = "	kc6pkui3la1tftux";
$password = "	ocjnu2n93wmjnajz";

// Conexão 
$conn = mysqli_connect($servername, $username, $password, $database);

// Checar a conexão
// if (!$conn) {
//       die("Conexão Falhou: " . mysqli_connect_error());
// }
 
// echo "Conexão completa";
 
// $sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
// if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>

