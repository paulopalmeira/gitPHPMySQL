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
$sql = "CREATE DATABASE CLINICA";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>