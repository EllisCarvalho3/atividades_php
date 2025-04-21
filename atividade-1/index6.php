<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Questão 6</title>
    <style>
        input.resultado {
            font-weight: bold;
            padding: 5px;
            width: 200px;
        }
        .normal {
            background-color:rgb(123, 191, 139);
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .febre {
            background-color:rgb(203, 131, 137);
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
<header>
<div class="logo-img"> 
            <img src="images/logo.png" alt="logo">
        </div>
    <nav>
      <ul>
        <li><a href="#">Introdução</a></li>
        <li><a href="#">Sintaxe</a></li>
        <li><a href="#">Operadores</a></li>
        <li><a href="#">Arrays</a></li>
        <li><a href="#">Depuração</a></li>
        <li><a href="#">API'S</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="questao6">
        <h1>Olá! Responda a questão 6 para introduzirmos PHP.</h1>
        <h2>Verifique se há febre</h2>
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
    </section>
  </main>

    <footer>
        <span class="footer-title">Ellis Carvalho Xavier</span>
        <ul class="socials">
            <li><a href="https://wa.me/qr/KNIVFKKZMUUXH1"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="https://pt-br.facebook.com/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://x.com/"><i class="bi bi-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/elliscarv/"><i class="bi bi-instagram"></i></a></li>
        </ul>
        <div class="info">
            <ul>
                <li class="footer-list_header">Oferece</li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Documentos</li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Políticas de Privacidade</a></li>
                <li><a href="#">Termos de Serviço</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Para você</li>
                <li><a href="#">Manuais</a></li>
                <li><a href="#">Tutoriais</a></li>
                <li><a href="#">Dicas e Truques</a></li>
                <li><a href="#">F&Q</a></li>
            </ul>
    
            <ul>
                <li class="footer-list_header">Trabalhe conosco</li>
                <li><a href="#">Afiliar</a></li>
                <li><a href="#">Colaborações</a></li>
                <li><a href="#">Patrocinadores</a></li>
                <li><a href="#">Parcerias</a></li>
        </div>
        <p>Copyright &copy 2025 Ellis Carvalho Xavier. Todos os diereitos reservados. </p>
    </footer>
</body>
</html>
