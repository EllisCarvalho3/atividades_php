<?php 


// Solicita as 4 notas do aluno
echo "Digite a primeira nota: ";
$nota1 = (float) readline();

echo "Digite a segunda nota: ";
$nota2 = (float) readline();

echo "Digite a terceira nota: ";
$nota3 = (float) readline();

echo "Digite a quarta nota: ";
$nota4 = (float) readline();

// Calcula a média aritmética
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

// Exibe a média
echo "A média aritmética do aluno é: " . number_format($media, 2) . "\n";



?>