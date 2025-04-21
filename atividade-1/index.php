<?php
$media = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota1 = (float) $_POST['nota1'];
    $nota2 = (float) $_POST['nota2'];
    $nota3 = (float) $_POST['nota3'];
    $nota4 = (float) $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/e.png" type="image/x-icon">
    <title>Questão 1</title>
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
        <section class="questao1">
            <h1>Olá! Responda a questão 1 para introduzirmos PHP.</h1>
            <h2>Digite as 4 notas do aluno</h2>
            <form method="post" action="">
                <label>Nota 1: <input type="number" step="0.01" name="nota1" required></label><br><br>
                <label>Nota 2: <input type="number" step="0.01" name="nota2" required></label><br><br>
                <label>Nota 3: <input type="number" step="0.01" name="nota3" required></label><br><br>
                <label>Nota 4: <input type="number" step="0.01" name="nota4" required></label><br><br>
                <button type="submit">Calcular Média</button>
            </form>

            <?php if (isset($media)): ?>
    <div class="resultado-media">
      <h3>Média do aluno: <?= number_format($media, 2, ',', '') ?></h3>
    </div>
  <?php endif; ?>

        </section>
    </main>
  



































  <!--  <section class="section-about" id="section-about">
        <div class="tamanho-video">
        <div class="contact-text">
                    <h1>Certificações</h1>
        </div>
            <video autoplay muted loop id="myVideo">
                <source src="videos/background.mp4" type="video/mp4">
              </video>       
        </div>   
    </section> -->

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
