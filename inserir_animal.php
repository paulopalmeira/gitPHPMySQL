<?php
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$alergico = $_POST['alergico'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_veterinaria";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checando a conexão
if ($conn->connect_error) {
  die("FALHOU: " . $conn->connect_error);
}

$sql = "INSERT INTO animal VALUES ";
$sql .= "('$nome', '$tipo', '$raca', '$idade', '$alergico')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Animal cadastrado com sucesso!";
echo "<a href='inserir_animal.php'>Clique para cadastrar novo animal</a><br>";
?>