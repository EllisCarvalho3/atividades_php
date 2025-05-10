<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles1.css?v=1">
    <link rel="shortcut icon" href="../imagens/e_amarelo.png" type="image/x-icon">
    <title>Questão 3</title>
</head>
<header> 
<div class="logo-img"> 
            <img src="../imagens/logo.png" alt="logo">
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
<body>
<br><br><br><br><br><br>
<main>
  
    <div class="form-container">
        <h1>Cadastro de Notas do Aluno</h1>
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>

            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" placeholder="Digite sua matrícula..." required>

            <label for="notas">Notas (separadas por vírgula):</label>
            <input type="text" id="notas" name="notas" required placeholder="Ex.: 7.5, 8, 9">

            <button type="submit">Calcular Média</button>
        </form>
    </div>

    <div class="resultado5">
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                require './Aluno.php';

                $nome = $_POST['nome'];
                $matricula = $_POST['matricula'];
                $notas = explode(',', $_POST['notas']);

                $aluno = new Aluno($nome, $matricula);

                foreach ($notas as $nota) {
                    $aluno->adicionarnota((float)trim($nota));
                }

                $media = $aluno->calcularmedia();
                $situacao = ($media >= 7) ? "Aprovado" : "Reprovado";

                echo "<h2>Nome: {$aluno->nome}</h2>";
                echo "<h2>Matrícula: {$aluno->matricula}</h2>";
                echo "<h2>Média: {$media}</h2>";
                echo "<h2>Situação: {$situacao}</h2>";
            }
        ?>
    </div>

    
 
</main>
   
<br> <br> <br><br><br><br><br>
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
