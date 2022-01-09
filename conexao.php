<?php
$servername = "localhost";
$database = "sistdez";
$username = "root";
$password = "usbw";

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

