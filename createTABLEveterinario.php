<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_veterinaria";

// Vamos criar a conexão - veja que o database clinica_veterinaria já foi criado.
$conn = new mysqli($servername, $username, $password, $dbname);
// Checando a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vamos criar a tabela veterinario - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "CREATE TABLE veterinario (
id_veterinario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
crv CHAR(5) NOT NULL,
cpf CHAR(11) NOT NULL,
UNIQUE (crv, cpf)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabela veterinario criada com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>