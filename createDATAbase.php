<?php
$servername = "localhost";
$username = "root";
$password = "";

// Criando a conexão
$conn = new mysqli($servername, $username, $password);

// Checando a conexão
if ($conn->connect_error) {
  die("Falhou a conexão: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE clinica_veterinaria";
if ($conn->query($sql) === TRUE) {
  echo "Database criada com sucesso";
} else {
  echo "Erro ao criar o database: " . $conn->error;
}

$conn->close();
?>