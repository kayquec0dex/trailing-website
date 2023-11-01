<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <header>
        <h1 class="titulo-cadastro">Confirmação de Cadastro</h1>
    </header>
    <main>
        <div class="informacoes-cadastro">
            <?php
                $nome = $_POST["nome"];
                $email = $_POST["email"];

                echo "<h2> Bem vindo, $nome!</h2>";
                echo "<p> Olá, $nome, seja bem-vindo à nossa plataforma de cursos online, aqui você encontrará o melhor conteúdo para se tornar um desenvolvedor!</p>";
            ?>
        </div>
    </main>
</body>
</html>