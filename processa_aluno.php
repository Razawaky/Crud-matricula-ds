<?php

include 'conexao.php';

//RECEBIMENTO DOS DADOS DO FORMULARIO
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$escolaridade = $_POST['escolaridade'];

//INSERÇÃO NO BANCO DE DADOS
$insere_aluno = "INSERT INTO aluno (nome, idade, cpf, escolaridade)
                    VALUES ('$nome', $idade, $cpf, '$escolaridade')";

//FUNCAO QUE CHAMA A CONEXAO E LEVA A CONSULTA PARA O BANCO DE DADOS
mysqli_query($conexao, $insere_aluno);

header('location: ver_aluno.php');

?>