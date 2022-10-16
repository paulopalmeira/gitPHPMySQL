<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_veterinaria";

// Vamos criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checando a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vamos criar a tabela CLIENTE - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE cliente (
id_cliente INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
cpf CHAR(11) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela CLIENTE criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>