<?php

//Define os parametros de login do Banco de Dados (Usuario e afins)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Cria a conexão com o banco de dados, utilizada em todo o projeto.
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificação de conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>