<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Cadastrado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>Cliente Cadastrado com Sucesso!</h1>
        <ul>
            <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>
            <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></li>
        </ul>

       
        <a href="index.html" class="back-button">Voltar ao Inicio</a>
    </div>
</body>
</html>
