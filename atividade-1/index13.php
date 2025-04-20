<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Função escreva()</title>
</head>
<body>
    <h2>Digite um texto e eu vou escrevê-lo para você:</h2>

    <!-- Formulário HTML -->
    <form method="post">
        Texto: 
        <input type="text" name="texto" required>
        <input type="submit" value="Escrever">
    </form>

    <?php
    // 1. Criamos a função escreva()
    function escreva($texto) {
        echo "<p><strong>Você escreveu:</strong> " . htmlspecialchars($texto) . "</p>";
    }

    // 2. Se o formulário foi enviado...
    if (isset($_POST['texto'])) {
        $mensagem = $_POST['texto'];

        // 3. Chamamos o robôzinho escreva() para mostrar o texto
        escreva($mensagem);
    }
    ?>
</body>
</html>
