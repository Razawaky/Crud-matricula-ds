<?php

include '../conexao.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$area = $_POST['area'];
$carga_horaria = $_POST['carga_horaria'];

$consulta = "UPDATE curso SET nome = '$nome', descricao =  '$descricao', area = '$area', carga_horaria = $carga_horaria WHERE codigo = $codigo";
mysqli_query($conexao, $consulta);

header('location: ver_curso.php');

?>