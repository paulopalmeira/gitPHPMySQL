<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Cadastro de animal </title>
</head>
<body>
  <h3>Formulário de Cadastro de Animais</h3><br>
  <form name="Cadastro" action="inserir_animal.php" method="POST">
    <label>Nome do animal: </label>
    <input type="text" name="nome" size="20"><br>
    <label>Tipo de animal: </label>
    <input type="text" name="tipo" size="20"><br>
    <label>Raça do animal: </label>
    <input type="text" name="raca" size="20"><br>
    <label>Idade do animal: </label>
    <input type="text" name="idade" size="3"> anos.<br>
    <label>O animal é alérgico ? </label>
    <input name="alergico" type="checkbox" value="1" /> Sim
    <input name="alergico" type="checkbox" value="0" /> Não
    <input type="submit" name="enviar" value="Enviar">
  </form>
</body>
</html>