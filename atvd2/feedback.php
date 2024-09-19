<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    
        <a href="../index.html"><i class="fas fa-Home"></i> Começo</a>
        <a href="../form.php"><i class="fas fa-user-plus"></i> Cadastrar Cliente</a>
        <a href="feedback.php"><i class="fas fa-comment"></i> Feedback de Produto</a>
        <a href="../atvd3/reserva.php"><i class="fas fa-calendar-alt"></i> Reserva de Sala</a>
    </div>
    

    
    <div class="main-content">
        <form class="feedback-form" action="processar_feedback.php" method="POST">
            <h1>Feedback de Produto</h1>
            <label for="produto">Nome do Produto</label>
            <input type="text" id="produto" name="produto" required>

            <label for="nota">Nota (1 a 5)</label>
            <select id="nota" name="nota" required>
                <option value="" disabled selected>Selecione uma nota</option>
                <option value="1">1 - Péssimo</option>
                <option value="2">2 - Ruim</option>
                <option value="3">3 - Regular</option>
                <option value="4">4 - Bom</option>
                <option value="5">5 - Excelente</option>
            </select>

            <label for="comentario">Comentário</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>

            <button type="submit">Enviar Feedback</button>
        </form>
    </div>

</body>
</html>
