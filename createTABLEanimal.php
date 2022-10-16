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

// Vamos criar a tabela ANIMAL - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE animal (
id_animal INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20),
tipo VARCHAR(20) NOT NULL,
raca VARCHAR(20),
idade CHAR(3),
alergico BOOLEAN NOT NULL,
fk_cliente_id_cliente INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela ANIMAL criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>