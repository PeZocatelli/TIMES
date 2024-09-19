<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Confirmada</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="confirmation-container">
        <h1>Reserva Confirmada!</h1>
        <ul>
            <li><strong>Nome do Solicitante:</strong> <?php echo htmlspecialchars($_POST['solicitante']); ?></li>
            <li><strong>Data da Reunião:</strong> <?php echo htmlspecialchars($_POST['data']); ?></li>
            <li><strong>Horário da Reunião:</strong> <?php echo htmlspecialchars($_POST['horario']); ?></li>
        </ul>
        <button onclick="window.location.href='reserva.php'">Fazer Outra Reserva</button>
    </div>

</body>
</html>
