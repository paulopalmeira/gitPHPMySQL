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

// Vamos alterar as tabelas criadas - conforme /cronograma/Cod_SQL_php_implement.txt
$sql = "ALTER TABLE animal 
ADD CONSTRAINT FK_animal_2
FOREIGN KEY (fk_cliente_id_cliente)
REFERENCES cliente (id_cliente)
ON DELETE RESTRICT";

$sql2 = "ALTER TABLE consulta 
ADD CONSTRAINT FK_consulta_2
FOREIGN KEY (fk_veterinario_id_veterinario)
REFERENCES veterinario (id_veterinario)";

$sql3 = "ALTER TABLE consulta 
ADD CONSTRAINT FK_consulta_3
FOREIGN KEY (fk_animal_id_animal)
REFERENCES animal (id_animal)";

$sql4 = "ALTER TABLE herbivoro 
ADD CONSTRAINT FK_herbivoro_1
FOREIGN KEY (fk_animal_id_animal)
REFERENCES animal (id_animal)
ON DELETE CASCADE";

$sql5 = "ALTER TABLE endereco 
ADD CONSTRAINT FK_endereco_2
FOREIGN KEY (fk_veterinario_id_veterinario)
REFERENCES veterinario (id_veterinario)";

$sql6 = "ALTER TABLE endereco 
ADD CONSTRAINT FK_endereco_3
FOREIGN KEY (fk_cliente_id_cliente)
REFERENCES cliente (id_cliente)";

$sql7 = "ALTER TABLE telefone 
ADD CONSTRAINT FK_telefone_2
FOREIGN KEY (fk_veterinario_id_veterinario)
REFERENCES veterinario (id_veterinario)";

$sql8 = "ALTER TABLE telefone 
ADD CONSTRAINT FK_telefone_3
FOREIGN KEY (fk_cliente_id_cliente)
REFERENCES cliente (id_cliente)";

if ($conn->query($sql) === TRUE) {
  echo "Alterações realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
  echo "Alterações dois realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
  echo "Alterações três realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
  echo "Alterações quatro realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql5) === TRUE) {
  echo "Alterações cinco realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql6) === TRUE) {
  echo "Alterações seis realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql7) === TRUE) {
  echo "Alterações sete realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

if ($conn->query($sql8) === TRUE) {
  echo "Alterações oito realizadas com sucesso";
} else {
  echo "Deu erro: " . $conn->error;
}

$conn->close();
?>