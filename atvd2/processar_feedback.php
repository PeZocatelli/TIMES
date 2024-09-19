<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="feedback-result">
        <h1>Obrigado pelo seu feedback!</h1>
        <ul>
            <li><strong>Produto:</strong> <?php echo htmlspecialchars($_POST['produto']); ?></li>
            <li><strong>Nota:</strong> <?php echo htmlspecialchars($_POST['nota']); ?></li>
            <li><strong>Comentário:</strong> <?php echo htmlspecialchars($_POST['comentario']); ?></li>
        </ul>

        <a href="feedback.php" class="back-button">Voltar ao Form
