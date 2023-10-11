<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER ALUNO</title>
</head>
<body>
    
<table style-"border: 1px solid #ccc">
    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>CPF</th>
        <th>Escolaridade</th>
    </thead>

    <tbody>
        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM aluno";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            //LAÇO PRA VARRER TODAS AS LINHAS DO BANCO E PREENCHER NA TABELA
            while($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<tr><td>' . $linha['nome'] . '</td>';
                echo '<td>' . $linha['idade'] . '</td>';
                echo '<td>' . $linha['cpf'] . '</td>';
                echo '<td>' . $linha['escolaridade'] . '</td>';
            
        ?>

        <td>
            <a href="deleta_aluno.php?codigo=
            <?php echo $linha['codigo']; ?>">
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