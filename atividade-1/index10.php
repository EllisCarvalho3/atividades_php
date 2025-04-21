<?php
session_start();

if (!isset($_SESSION['menores'])) {
    $_SESSION['menores'] = 0;
    $_SESSION['idosos'] = 0;
}

if (isset($_POST['idade'])) {
    $idade = (int) $_POST['idade'];

    if ($idade < 1) {
        $finalizado = true;
        $menores = $_SESSION['menores'];
        $idosos = $_SESSION['idosos'];
        session_destroy();
    } else {
        if ($idade < 18) {
            $_SESSION['menores']++;
        } elseif ($idade > 65) {
            $_SESSION['idosos']++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Questão 10</title>
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
        <section class="questao10">
            <h1>Olá! Responda a questão 10 para introduzirmos PHP.</h1>
            <h2>Contar faixas etárias</h2>
             <?php if (isset($finalizado) && $finalizado): ?>
                <div class="final-questao10">
                    <p>Total de pessoas com menos de 18 anos: <strong><?= $menores ?></strong></p>
                            <p>Total de pessoas com mais de 65 anos: <strong><?= $idosos ?></strong></p>
                            <p><a href="<?= $_SERVER['PHP_SELF'] ?>">Reiniciar</a></p>
                </div>
       
    <?php else: ?>
        <form method="post">
            Idade: <input type="number" name="idade" min="0" required>
            <input type="submit" value="Enviar">
        </form>
        <div class="resultados-questao10">
            <p>Digite <b>0</b> ou valor negativo para encerrar.</p>
        </div>
        
    <?php endif; ?>

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
