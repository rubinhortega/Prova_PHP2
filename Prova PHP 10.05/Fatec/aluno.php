<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
</head>
<body>
    <div class="wrapper">
        <h2>fatec</h2>
        <p>Aluno Fatec.</p>
        <form action="aluno2.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" value="nome">
                <br><br>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" value="sobrenome">
                <br><br>
                <label>curso</label>
                <input type="text" name="curso" value="curso">
                <br><br>
                <label>RA</label>
                <input type="text" name="ra" value="ra">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>    
</body>
</html>
