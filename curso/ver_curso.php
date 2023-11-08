<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER CURSO</title>
</head>
<body>
    
<table style-"border: 1px solid #ccc">
    <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Área</th>
        <th>Carga Horária</th>
    </thead>

    <tbody>
        <?php
            include '../conexao.php';
            $consulta = "SELECT * FROM curso";
            $consulta_curso = mysqli_query($conexao, $consulta);
            //LAÇO PRA VARRER TODAS AS LINHAS DO BANCO E PREENCHER NA TABELA
            while($linha = mysqli_fetch_array($consulta_curso)){
                echo '<tr><td>' . $linha['nome'] . '</td>';
                echo '<td>' . $linha['descricao'] . '</td>';
                echo '<td>' . $linha['area'] . '</td>';
                echo '<td>' . $linha['carga_horaria'] . '</td>';
            
        ?>

        <td> 
            <a href="edita_curso.php?editar=<?php echo $linha['codigo']; ?>">
                <input type="submit" value="EDITAR">
            </a>
        </td>

        <td>
            <a href="deleta_curso.php?codigo=<?php echo $linha['codigo']; ?>">
                <input type="submit" value="DELETAR"/>
            </a>
        </td></tr>

        <?php 
            }
        ?>

    </tbody>

</table>

</body>
</html>