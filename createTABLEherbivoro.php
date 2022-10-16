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

// Vamos criar a tabela HERBIVORO - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE herbivoro (
id_herbivoro INT AUTO_INCREMENT PRIMARY KEY,
peso FLOAT NOT NULL,
altura FLOAT NOT NULL,
fk_animal_id_animal INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela HERBIVORO criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>