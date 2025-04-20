<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora com IF/ELSE e SWITCH/CASE</title>
    <style>
        body { font-family: Arial; }
        .tabs { margin-bottom: 15px; }
        .tab {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 5px;
            background: #eee;
            cursor: pointer;
            border-radius: 5px 5px 0 0;
        }
        .active { background: #ccc; font-weight: bold; }
        .content { border: 1px solid #ccc; padding: 20px; border-radius: 0 0 5px 5px; }
        form { margin-bottom: 20px; }
        .hist {
            margin-top: 15px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px dashed #aaa;
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

<h2>Calculadora com IF/ELSE e SWITCH/CASE</h2>

<div class="tabs">
    <a href="?tab=ifelse" class="tab <?= (!isset($_GET['tab']) || $_GET['tab'] == 'ifelse') ? 'active' : '' ?>">IF / ELSE</a>
    <a href="?tab=switch" class="tab <?= (isset($_GET['tab']) && $_GET['tab'] == 'switch') ? 'active' : '' ?>">SWITCH / CASE</a>
</div>

<div class="content">
<?php
$tab = $_GET['tab'] ?? 'ifelse';
$history = $_SESSION['historico'] ?? [];

if ($tab == 'ifelse') {
    echo '<h3>Calculadora IF / ELSE</h3>';
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['num1'])) {
        $a = (float) $_GET['num1'];
        $b = (float) $_GET['num2'];
        $op = $_GET['operacao'];
        $res = "";

        if ($op == 'soma') {
            $res = $a + $b;
        } else if ($op == 'diferenca') {
            $res = $a - $b;
        } else if ($op == 'produto') {
            $res = $a * $b;
        } else if ($op == 'divisao') {
            $res = $b != 0 ? $a / $b : "Erro: divisão por zero";
        } else if ($op == 'resto') {
            $res = $b != 0 ? $a % $b : "Erro: divisão por zero";
        }

        $registro = "$a $op $b = $res";
        $_SESSION['historico'][] = $registro;
        echo "<p><strong>Resultado:</strong> $res</p>";
    }
    ?>
    <form method="get">
        <input type="hidden" name="tab" value="ifelse">
        Número 1: <input type="number" name="num1" step="any" required><br><br>
        Número 2: <input type="number" name="num2" step="any" required><br><br>
        Operação:
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="diferenca">Diferença</option>
            <option value="produto">Produto</option>
            <option value="divisao">Divisão</option>
            <option value="resto">Resto</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
<?php
} else {
    echo '<h3>Calculadora SWITCH / CASE</h3>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['num1'])) {
        $a = (float) $_POST['num1'];
        $b = (float) $_POST['num2'];
        $op = $_POST['operacao'];
        $res = "";

        switch ($op) {
            case 'soma': $res = $a + $b; break;
            case 'diferenca': $res = $a - $b; break;
            case 'produto': $res = $a * $b; break;
            case 'divisao': $res = $b != 0 ? $a / $b : "Erro: divisão por zero"; break;
            case 'resto': $res = $b != 0 ? $a % $b : "Erro: divisão por zero"; break;
        }

        $registro = "$a $op $b = $res";
        $_SESSION['historico'][] = $registro;
        echo "<p><strong>Resultado:</strong> $res</p>";
    }
    ?>
    <form method="post" action="?tab=switch">
        Número 1: <input type="number" name="num1" step="any" required><br><br>
        Número 2: <input type="number" name="num2" step="any" required><br><br>
        Operação:
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="diferenca">Diferença</option>
            <option value="produto">Produto</option>
            <option value="divisao">Divisão</option>
            <option value="resto">Resto</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
<?php } ?>

<?php if (!empty($_SESSION['historico'])): ?>
    <div class="hist">
        <h4>📜 Histórico:</h4>
        <ul>
            <?php foreach ($_SESSION['historico'] as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <form method="post" action="?tab=<?= $tab ?>">
            <input type="submit" name="limpar" value="Limpar histórico">
        </form>
    </div>
<?php endif; ?>

<?php
if (isset($_POST['limpar'])) {
    unset($_SESSION['historico']);
    header("Location: ?tab=$tab");
    exit;
}
?>
</div>


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
