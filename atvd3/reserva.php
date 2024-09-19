<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Reunião</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>
<body>

    
    <div class="sidebar">
        <a href="../index.html"><i class="fas fa-home"></i> Começo</a>
        <a href="../form.php"><i class="fas fa-user-plus"></i> Cadastrar Cliente</a>
        <a href="../atvd2/feedback.php"><i class="fas fa-comment"></i> Feedback de Produto</a>
        <a href="reserva.php"><i class="fas fa-calendar-alt"></i> Reserva de Sala</a>
        
    </div>

  
    <div class="main-content">
        <form class="reservation-form" action="processar_reserva.php" method="POST">
            <h1>Reserva de Sala de Reunião</h1>
            <label for="solicitante">Nome do Solicitante</label>
            <input type="text" id="solicitante" name="solicitante" required>

            <label for="data">Data da Reunião</label>
            <input type="date" id="data" name="data" required>

            <label for="horario">Horário da Reunião</label>
            <input type="time" id="horario" name="horario" required>

            <button type="submit">Reservar Sala</button>
        </form>
    </div>

</body>
</html>
