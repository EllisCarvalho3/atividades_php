<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles1.css">
    <link rel="shortcut icon" href="../imagens/e_amarelo.png" type="image/x-icon">
    <title>Questão 2</title>
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
    <?php 
    require './Triangulo.php';
    $lado1 = new Triangulo();
    $msg = $lado1->conferir(10, 15, 20, 20, 20);
    echo "<p>$msg</p>"
?>

    
</body>
</html>