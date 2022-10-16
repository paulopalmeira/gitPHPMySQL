<?php
$servername = "localhost";
$username = "root";
$password = "";

// Criando a conexão
$conn = new mysqli($servername, $username, $password);

// Verificando a conexão
if ($conn->connect_error) {
  die("Falhou a conexão: " . $conn->connect_error);
}
echo "Conectou beleza";
?>