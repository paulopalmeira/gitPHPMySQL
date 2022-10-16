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

// Vamos criar a tabela CONSULTA - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE consulta (
id_consulta INT AUTO_INCREMENT PRIMARY KEY,
data_ DATE NOT NULL,
horario TIME NOT NULL,
diagnostico TEXT NOT NULL,
valor FLOAT NOT NULL,
fk_veterinario_id_veterinario INT,
fk_animal_id_animal INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela CONSULTA criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>