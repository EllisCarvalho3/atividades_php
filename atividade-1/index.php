<?php 

echo "Digite a primeira nota: 8";
$nota1 = (float) readline();

echo "Digite a segunda nota: 6";
$nota2 = (float) readline();

echo "Digite a terceira nota: 10";
$nota3 = (float) readline();

echo "Digite a quarta nota: 10";
$nota4 = (float) readline();


$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "A média aritmética do aluno é: " . number_format($media, 2) . "\n";



?>