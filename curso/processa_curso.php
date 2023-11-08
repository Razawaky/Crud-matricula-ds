<?php

include '../conexao.php';

//RECEBIMENTO DOS DADOS DO FORMULARIO
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$area = $_POST['area'];
$carga_horaria = $_POST['carga_horaria'];

//INSERÇÃO NO BANCO DE DADOS
$insere_curso = "INSERT INTO curso (nome, descricao, area, carga_horaria)
                    VALUES ('$nome', '$descricao', '$area', $carga_horaria)";

//FUNCAO QUE CHAMA A CONEXAO E LEVA A CONSULTA PARA O BANCO DE DADOS
mysqli_query($conexao, $insere_curso);

header('location: ver_curso.php');

?>