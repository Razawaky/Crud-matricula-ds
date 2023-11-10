<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table style="border: 2px solid #ccc;">
        <thead>
            <th>Data da matricula</th>
            <th>Nome do aluno</th>
            <th>Nome do curso</th>
        </thead>
    </table>
    <tbody>
        <?php
            include 'conexao.php';
            $consulta = "SELECT matricula.cod_matricula, matricula.data
                                aluno.nome_al,
                                curso.nome
                            FROM aluno, curso, matricula
                            WHERE matricula.cod_aluno = aluno.codigo
                            AND matricula.cod_curso = curso.codigo";
            $consulta_matricula = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_matricula)) {
                echo '<tr><td>' . $linha['data'] . '</td>';
                echo '<td>' . $linha['nome_al'] . '</td>';
                echo '<td>' . $linha['nome'] . '</td></tr>';    
            }
        ?>
    </tbody>

</body>
</html>