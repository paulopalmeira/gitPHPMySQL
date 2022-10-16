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

// Vamos criar a tabela TELEFONE - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE telefone (
id_telefone INT AUTO_INCREMENT PRIMARY KEY,
numero_telefone_fixo VARCHAR(15),
numero_telefone_celular VARCHAR(15),
fk_veterinario_id_veterinario INT,
fk_cliente_id_cliente INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela TELEFONE criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>