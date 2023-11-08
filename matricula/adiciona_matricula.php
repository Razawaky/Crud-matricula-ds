<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="processa_matricula.php" method="post">
    <label for="">Data da matricula</label>
    <input type="text" name="data" placeholder="Digite a data">
    <select name="escolha_aluno">
        <option>Selecione um aluno:</option>
        <?php 
            include 'conexao.php'
            $consulta = "SELECT * FROM aluno";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_aluno)) {
                echo '<option value="' . $linha['codigo'] . '">' . 
                                         $linha['nome_al'] . '</option>';
            }
        ?>
    </select>
    <br><br>
    <select name = "escolha_curso">
    <option>Selecione um aluno:</option>
        <?php 
            include 'conexao.php'
            $consulta = "SELECT * FROM aluno";
            $consulta_curso = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_aluno)) {
                echo '<option value="' . $linha['codigo'] . '">' . 
                                         $linha['nome_al'] . '</option>';
            }
        ?>
    </select>
    <br><br>
    <input type="submit" value="CADASTRAR MATRICULA"/>
</form>

</body>
</html>