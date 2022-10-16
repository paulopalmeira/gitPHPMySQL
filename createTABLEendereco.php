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

// Vamos criar a tabela ENDERECO - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE endereco (
id_endereco INT AUTO_INCREMENT PRIMARY KEY,
logradouro VARCHAR(150) NOT NULL,
numero VARCHAR(8) NOT NULL,
bairro VARCHAR(50) NOT NULL,
cidade VARCHAR(50) NOT NULL,
uf CHAR(2) NOT NULL,
cep CHAR(8) NOT NULL,
fk_veterinario_id_veterinario INT,
fk_cliente_id_cliente INT
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela ENDERECO criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>