<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Verificar Temperatura Corporal</title>
    <style>
        input.resultado {
            font-weight: bold;
            padding: 5px;
            width: 200px;
        }
        .normal {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .febre {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <h2>Verificar se há febre</h2>

    <form method="post">
        Temperatura corporal (°C): 
        <input type="number" step="0.1" name="temp" min="30" max="45"
               value="<?= isset($_POST['temp']) ? $_POST['temp'] : '' ?>"><br><br>

        Resultado:
        <?php
        $classe = '';
        $mensagem = '';
        if (isset($_POST['temp'])) {
            $t = (float) $_POST['temp'];

            if ($t >= 36 && $t <= 36.7) {
                $mensagem = number_format($t, 1, ',', '') . " °C - Temperatura normal";
                $classe = "normal";
            } else {
                $mensagem = number_format($t, 1, ',', '') . " °C - Pode estar com febre";
                $classe = "febre";
            }
        }
        ?>
        <input type="text" class="resultado <?= $classe ?>" readonly value="<?= $mensagem ?>"><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>
