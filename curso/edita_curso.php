<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA curso</title>
</head>
<body>

<?php

    include '../conexao.php';
    $consulta = "SELECT * FROM curso";
    $consulta_curso = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta_curso)){
        if($linha['codigo'] == $_GET['editar']){ ?>
        
            <form method="post" action="edicao_curso.php">
                <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"><br>
                <label>Descrião</label>
                <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"><br>
                <label>Área</label>
                <input type="text" name="area" value="<?php echo $linha['area']; ?>"><br>
                <label>Carga Horária</label>
                <input type="text" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>"><br><br>

                <input type="submit" value="EDITAR">
            </form>
            <?php 
        } 
    } ?>




</body>
</html>