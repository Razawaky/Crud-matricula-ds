<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA ALUNO</title>
</head>
<body>

<?php

    include '../conexao.php';
    $consulta = "SELECT * FROM aluno";
    $consulta_aluno = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta_aluno)){
        if($linha['codigo'] == $_GET['editar']){ ?>
        
            <form method="post" action="edicao_aluno.php">
                <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
                <label>nome_al</label>
                <input type="text" name="nome_al" value="<?php echo $linha['nome_al']; ?>"><br>
                <label>Idade</label>
                <input type="number" name="idade" value="<?php echo $linha['idade']; ?>"><br>
                <label>CPF</label>
                <input type="number" name="cpf" value="<?php echo $linha['cpf']; ?>"><br>
                <label>Escolaridade</label>
                <input type="text" name="escolaridade" value="<?php echo $linha['escolaridade']; ?>"><br><br>

                <input type="submit" value="EDITAR">
            </form>
            <?php 
        } 
    } ?>




</body>
</html>