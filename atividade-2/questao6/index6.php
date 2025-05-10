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
        <h1>Classe: Produto</h1>
        <form action="" method="post">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o produto..." required>

            <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" placeholder="Digite o preço..." required>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" placeholder="Digite a quantidade..." required>

            <button type="submit">Cadastrar Produto</button>
        </form> <br>

        <div class="resultado6">
          
        <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                require './Produto.php';

                $nome = $_POST['nome'];
                $preco = floatval($_POST['preco']);
                $quantidade = intval($_POST['quantidade']);

                $produto = new Produto($nome, $preco, $quantidade);
               
                echo "<p>" . $produto->exibir() . "</p>";
                echo "<p>Preço: R$ " . number_format($produto->getpreco(), 2, ',', '.') . "</p>";
                echo "<p>Estoque: " . $produto->getestoque() . " unidades</p>";
            }
        ?>

        </div>
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
