<?php

include '../conexao.php';

$codigo = $_POST['codigo'];
$nome_al = $_POST['nome_al'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$escolaridade = $_POST['escolaridade'];

$consulta = "UPDATE aluno SET nome_al = '$nome_al', idade =  $idade, cpf = $cpf, escolaridade = '$escolaridade' WHERE codigo = $codigo";
mysqli_query($conexao, $consulta);

header('location: ver_aluno.php');

?>