<?php

//PARA A CONEXAO, SAO NECESSARIOS 4 PARAMETROS
$servidor = 'localhost';
$usuario = 'root';
$senha =  ''; //usbw se utiliza USBServer
$banco = 'escola';

//FUNÇÃO PARA CONECTAR COM O BANCO
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

?>