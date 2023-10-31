<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <h1>Confirmação de Cadastro</h1>
    <p>Seus dados foram registrados com sucesso:</p>
    <ul>
        <li><strong>Nome:</strong> <?php echo $_POST["nome"]; ?></li>
        <li><strong>E-mail:</strong> <?php echo $_POST["email"]; ?></li>
        <li><strong>RG:</strong> <?php echo $_POST["rg"]; ?></li>
    </ul>
</body>
</html>